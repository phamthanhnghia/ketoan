<?php namespace App\Http\Controllers;

use App\Models\Accouting_account as Accouting_account;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class Accouting_accountController extends Controller {

    public function index()
      { 
        $data['accouting_accounts'] = Accouting_account::all();
        return view('accouting_account/index',$data);
      }
    public function add()
      { 
        return view('accouting_account/add');
      }
    public function addPost()
      {
        $accouting_account_data = array(
             'code' => Input::get('code'), 
             'name' => Input::get('name'), 
            );
        $accouting_account_id = Accouting_account::insert($accouting_account_data);
        return redirect('accouting_account')->with('message', 'Accouting_account successfully added');
    }
    public function delete($id)
    {   
        $accouting_account=Accouting_account::find($id);
        $accouting_account->delete();
        return redirect('accouting_account')->with('message', 'Accouting_account deleted successfully.');
    }
    public function edit($id)
    {   
        $data['accouting_account']=Accouting_account::find($id);
        return view('accouting_account/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('accouting_account_id');
        $accouting_account=Accouting_account::find($id);
                       
        $accouting_account_data = array(
          'code' => Input::get('code'), 
          'name' => Input::get('name'), 
        );
        $accouting_account_id = Accouting_account::where('id', '=', $id)->update($accouting_account_data);
        return redirect('accouting_account')->with('message', 'Accouting_account Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $accouting_account=Accouting_account::find($id);
        $accouting_account->status=!$accouting_account->status;
        $accouting_account->save();
        return redirect('accouting_account')->with('message', 'Change accouting_account status successfully');
    }
     public function view($id)
    {   
        $data['accouting_account']=Accouting_account::find($id);
        return view('accouting_account/view',$data);
        
    }
}