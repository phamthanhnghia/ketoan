<?php namespace App\Http\Controllers;

use App\Models\Users as Users;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class UsersController extends Controller {

    public function index()
      { 
        $data['userss'] = Users::all();
        return view('users/index',$data);
      }
    public function add()
      { 
        return view('users/add');
      }
    public function addPost()
      {
        // echo '<pre>';
        // print_r(Input::get());
        // echo '</pre>';
        // die;
        $users_data = array(
             'user_code' => Input::get('user_code'), 
             'name' => Input::get('name'), 
             'address' => Input::get('address'), 
             'phone' => Input::get('phone'), 
             'PID' => Input::get('PID'), 
             'tax_code' => Input::get('tax_code'), 
             'blank_account_number' => Input::get('blank_account_number'), 
             'blank_account_name' => Input::get('blank_account_name'), 
             'password' => Input::get('password'), 
             'username' => Input::get('username'), 
             'role' => Input::get('role'), 
             'created_at' => date("Y-m-d H:i:s"),
            );
                                            $users_id = Users::insert($users_data);
        return redirect('users')->with('message', 'Users successfully added');
    }
    public function delete($id)
    {   
        $users=Users::find($id);
        $users->delete();
        return redirect('users')->with('message', 'Users deleted successfully.');
    }
    public function edit($id)
    {   
        $data['users']=Users::find($id);
        return view('users/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('users_id');
        $users=Users::find($id);
                                                                                               
        $users_data = array(
          'user_code' => Input::get('user_code'), 
          'name' => Input::get('name'), 
          'address' => Input::get('address'), 
          'phone' => Input::get('phone'), 
          'PID' => Input::get('PID'), 
          'tax_code' => Input::get('tax_code'), 
          'blank_account_number' => Input::get('blank_account_number'), 
          'blank_account_name' => Input::get('blank_account_name'), 
          'password' => Input::get('password'), 
          'username' => Input::get('username'), 
          'role' => Input::get('role'), 
          'updated_at' => date("Y-m-d H:i:s"),
        );
        $users_id = Users::where('id', '=', $id)->update($users_data);
        return redirect('users')->with('message', 'Users Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $users=Users::find($id);
        $users->status=!$users->status;
        $users->save();
        return redirect('users')->with('message', 'Change users status successfully');
    }
     public function view($id)
    {   
        $data['users']=Users::find($id);
        return view('users/view',$data);
        
    }
}