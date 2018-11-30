<?php namespace App\Http\Controllers;

use App\Models\Bill as Bill;
use App\Models\Users as Users;
use App\Models\Bill_detail as Bill_detail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class BillController extends Controller {

    public function index()
      { 
        $data['bills'] = Bill::all();
        return view('bill/index',$data);
      }
    public function add($id)
      { 
        $aSearchUser = array();
        $aData = Users::all();
        
        foreach ($aData as $key => $value) {
          $item['label'] = $value->user_code." - ".$value->name." - ".$value->address;
          $item['value'] = $value->id;
          $item['name']  = $value->name;
          $item['address']  = $value->address;
          $aSearchUser[] = $item;
        }

        return view('bill/add',[
            'aSearchUser' => $aSearchUser,
            'id' => $id,
            ]);
      }
    public function addPost()
      {
        
        // $bill_data = array(
        //      'bill_type' => Input::get('bill_type'), 
        //      'user_id' => Input::get('user_id'), 
        //      'reason_note' => Input::get('reason_note'), 
        //      'original_docs' => Input::get('original_docs'), 
        //      'wh_id' => Input::get('wh_id'), 
        //     );
        // $bill_id = Bill::insert($bill_data);
        $bill = new Bill();
        $bill->bill_type   = Input::get('bill_type');
        $bill->user_id     = Input::get('user_id');
        $bill->reason_note = Input::get('reason_note');
        $bill->original_docs = Input::get('original_docs');
        $bill->wh_id = Input::get('wh_id');
        $bill->save();

        $aDetail = Input::get('detail');
        foreach ($aDetail as $key => $value) {
            if(empty($value->acc_code) || empty($value->invoice_number) ||  empty($value->total)){
                continue;
            }
            $bill_detail = new Bill_detail();
            $bill_detail->bill_id = $bill->id;
            $bill_detail->acc_code = $value->acc_code;
            $bill_detail->released_date = $value->released_date;
            $bill_detail->invoice_number = $value->invoice_number;
            $bill_detail->invoice_type = $value->invoice_type;
            $bill_detail->total = $value->total;
            $bill_detail->exchange_rate = $value->exchange_rate;
            $bill_detail->save();
        }
        return redirect('bill')->with('message', 'Bill successfully added');
    }
    public function delete($id)
    {   
        $bill=Bill::find($id);
        $bill->delete();
        return redirect('bill')->with('message', 'Bill deleted successfully.');
    }
    public function edit($id)
    {   
        $data['bill']=Bill::find($id);
        return view('bill/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('bill_id');
        $bill=Bill::find($id);
                                               
        $bill_data = array(
          'bill_type' => Input::get('bill_type'), 
          'user_id' => Input::get('user_id'), 
          'reason_note' => Input::get('reason_note'), 
          'original_docs' => Input::get('original_docs'), 
          'wh_id' => Input::get('wh_id'), 
        );
        $bill_id = Bill::where('id', '=', $id)->update($bill_data);
        return redirect('bill')->with('message', 'Bill Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $bill=Bill::find($id);
        $bill->status=!$bill->status;
        $bill->save();
        return redirect('bill')->with('message', 'Change bill status successfully');
    }
     public function view($id)
    {   
        $data['bill']=Bill::find($id);
        return view('bill/view',$data);
        
    }
}