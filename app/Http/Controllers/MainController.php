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
        $users = Users::where('username', '=', $username)->where('password','=',$password)->first();
        if(empty($users)){
            return redirect('/')->with('message', 'Đéo đăng nhập được!');
        }else{
            session(['users' => $users ]);
            // echo '<pre>';
            // print_r($users);
            // echo '</pre>';
            // die;
            return redirect('/main');
        }
    }
    public function main()
    {
        // echo '<pre>';
        // print_r(session('users'));
        // echo '</pre>';
        // die;
        return view('main/main');
    }

}
