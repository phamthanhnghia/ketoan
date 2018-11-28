<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;
// CREATE TABLE `main`( `id` INT(11) NOT NULL AUTO_INCREMENT,`name` VARCHAR(255), `updated_at` TIMESTAMP NULL, `created_at` TIMESTAMP NULL, `status` ENUM('0','1'), PRIMARY KEY (`id`));  
class Main extends Eloquent  {

    protected $table = 'main';
}