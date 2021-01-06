<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_Available extends Model
{
    //
	protected $table = "available";
	public $timestamps = false;
	/*const CREATED_AT = "create_time";
	const UPDATED_AT = "update_time";*/
	protected $primaryKey = "id";

}
