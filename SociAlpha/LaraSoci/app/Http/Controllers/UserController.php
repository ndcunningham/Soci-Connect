<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function index(){
		$users = Users::all();
		return view('users.index')->with('users', $users);
	}

	public function create(){
		return view('users.create');
	}

	public function getUser($id){
		$user = Users::find($id);
		return view('users.find')->with('user',$user);
	}
}