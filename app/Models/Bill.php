<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;
use App\Models\Users as Users;

class Bill extends Eloquent  {

    protected $table = 'bill';
    
    public function getUserName(){
        $users = Users::find($this->user_id);
        return $users['name'];
    }
}