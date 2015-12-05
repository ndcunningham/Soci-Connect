<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {
	protected $table = "role";
	public $timestamp = false;
 	protected $fillable = ['name'];
}