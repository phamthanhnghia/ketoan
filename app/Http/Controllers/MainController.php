<?php namespace App\Http\Controllers;

use App\Models\Main as Main;
use App\Models\Users as Users;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Hash;
class MainController extends Controller {

    public function index()
      { 
        // $data['mains'] = Main::all();
        return view('main/index');
      }
    public function add()
      { 
        return view('main/add');
      }
    public function login()
      {
        $username = Input::get('username');
        $password = Input::get('password');
        $users = Users::where('username', '=', $username)->where('password','=',$password)->get();
        if(!$users->isEmpty()){
            return redirect('/')->with('message', 'Main successfully added');
        }else{
            return redirect('/')->with('message', 'Main successfully added');
        }
    }
    public function delete($id)
    {   
        $main=Main::find($id);
        $main->delete();
        return redirect('main')->with('message', 'Main deleted successfully.');
    }
    public function edit($id)
    {   
        $data['main']=Main::find($id);
        return view('main/edit',$data);
    }
    public function editPost()
    {   
        $id =Input::get('main_id');
        $main=Main::find($id);
               
        $main_data = array(
          'name' => Input::get('name'), 
        );
        $main_id = Main::where('id', '=', $id)->update($main_data);
        return redirect('main')->with('message', 'Main Updated successfully');
    }

    
    public function changeStatus($id)
    {   
        $main=Main::find($id);
        $main->status=!$main->status;
        $main->save();
        return redirect('main')->with('message', 'Change main status successfully');
    }
     public function view($id)
    {   
        $data['main']=Main::find($id);
        return view('main/view',$data);
        
    }
}