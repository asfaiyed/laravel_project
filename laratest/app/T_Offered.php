<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_Offered extends Model
{
    //
	protected $table = "offered";
	public $timestamps = false;
	/*const CREATED_AT = "create_time";
	const UPDATED_AT = "update_time";*/
	protected $primaryKey = "id";

}
