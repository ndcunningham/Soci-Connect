<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controllers {

public function index(){
		$roles = Role::all();
		return view('roles.index')->with('roles', $roles);
	}

	public function create(){
		return view('roles.create');
	}

	public function getUser($id){
		$role = Users::find($id);
		return view('roles.find')->with('roles', $roles);
	}
}