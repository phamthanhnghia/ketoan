<?php namespace App\Http\Controllers;

use App\Models\Bill_detail as Bill_detail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Bill_detailController extends Controller {

    public function index()
      { 
        $data['bill_details'] = Bill_detail::all();
        return view('bill_detail/index',$data);
      }
    public function add()
      { 
        return view('bill_detail/add');
      }
    public function addPost()
      {
        $bill_detail_data = array(
             'bill_id' => Input::get('bill_id'), 
             'acc_id' => Input::get('acc_id'), 
             'released_date' => Input::get('released_date'), 
             'invoice_number' => Input::get('invoice_number'), 
             'invoice_type' => Input::get('invoice_type'), 
             'total' => Input::get('total'), 
             'exchange_rate' => Input::get('exchange_rate'), 
            );
                            $bill_detail_id = Bill_detail::insert($bill_detail_data);
        return redirect('bill_detail')->with('message', 'Bill_detail successfully added');
    }
    public function delete($id)
    {   
        $bill_detail=Bill_detail::find($id);
        $bill_detail->delete();
        return redirect('bill_detail')->with('message', 'Bill_detail deleted successfully.');
    }
    public function edit($id)
    {   
        $data['bill_detail']=Bill_detail::find($id);
        return view('bill_detail/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('bill_detail_id');
        $bill_detail=Bill_detail::find($id);
                                                               
        $bill_detail_data = array(
          'bill_id' => Input::get('bill_id'), 
          'acc_id' => Input::get('acc_id'), 
          'released_date' => Input::get('released_date'), 
          'invoice_number' => Input::get('invoice_number'), 
          'invoice_type' => Input::get('invoice_type'), 
          'total' => Input::get('total'), 
          'exchange_rate' => Input::get('exchange_rate'), 
        );
        $bill_detail_id = Bill_detail::where('id', '=', $id)->update($bill_detail_data);
        return redirect('bill_detail')->with('message', 'Bill_detail Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $bill_detail=Bill_detail::find($id);
        $bill_detail->status=!$bill_detail->status;
        $bill_detail->save();
        return redirect('bill_detail')->with('message', 'Change bill_detail status successfully');
    }
     public function view($id)
    {   
        $data['bill_detail']=Bill_detail::find($id);
        return view('bill_detail/view',$data);
        
    }
}