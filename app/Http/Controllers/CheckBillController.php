<?php
namespace App\Http\Controllers;
use App\Models\Bill;
use App\Models\Users;
use App\Models\Bill_detail as Bill_detail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Hash;
use DB;
class CheckBillController extends Controller {
    protected $instanceBill;
    protected $instanceUser;
    public function __construct(Bill $bill, Users $user) {
      $this->instanceBill = $bill;
      $this->instanceUser = $user;
    }


    public function index() {
        $result = DB::table('bill')
                  ->leftjoin('users','users.id','=','bill.user_id')
                  ->where('bill.status','0')
                  ->select('users.name','bill.id','bill.acc_code','bill.bill_type')
                  ->get();
        return view('check_bill/index',["data" => $result]);
    }

    public function update( $id ) {
        $result = DB::table('bill')
                  ->where('id',$id)
                  ->update(['status' => "1"]);
        return redirect('check_bill');
    }

    public function form( $id ) {
      $result = DB::table('bill')
                ->leftjoin('users','users.id','=','bill.user_id')
                ->where('bill.id',$id)
                ->get();
      $result[] = DB::table('bill_detail')
                ->where('bill_id', $id)
                ->get();
      // echo "<pre>";
      // print_r($result);
      // exit();
        return view('check_bill/form',['data'=>$result]);
    }

    public function report() {
      return view('report/index');
    }

    public function processReport($type,$date) {
      $result = DB::table('bill')
                ->leftjoin('users','users.id','=','bill.user_id')
                ->where('bill.status','1');
      $arr_date = explode('-',$date);
      if($type == "day") {
          $result->whereRaw('DAY(`bill`.`created_at`) = ?',[(int)$arr_date[2]]);
          $result->whereRaw('MONTH(`bill`.`created_at`) = ?',[(int)$arr_date[1]]);
          $result->whereRaw('YEAR(`bill`.`created_at`) = ?',[(int)$arr_date[0]]);
      } else if($type == "month") {
          $result->whereRaw('MONTH(`bill`.`created_at`) = ?',[(int)$arr_date[1]]);
          $result->whereRaw('YEAR(`bill`.`created_at`) = ?',[(int)$arr_date[0]]);
      } else {
          $result->whereRaw('YEAR(`bill`.`created_at`) = ?',[(int)$arr_date[0]]);
      }
      $result = $result->select('bill.id','bill.bill_type','users.name','bill.acc_code','bill.reason_note','bill.original_docs','bill.created_at')
                       ->get();
      $result = json_decode($result,true);
      $arr_save = [];
      foreach($result as $item) {
        // $temp = DB::table('bill_detail')
        //         ->where('bill_id',$item[''])
        $temp                 = DB::table('bill_detail')
                              ->where('bill_id',$item['id'])
                              ->get();
        $item['bill_detail'] = json_decode($temp,true);
        $arr_save[] = $item;
      }
      return view('report/index',['data'=>$arr_save,'type' =>$type,'date'=>$date]);
    }
}
