<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_Cashback extends Model
{
    //
	protected $table = "schedule";
	public $timestamps = false;
	/*const CREATED_AT = "create_time";
	const UPDATED_AT = "update_time";*/
	protected $primaryKey = "id";

}
