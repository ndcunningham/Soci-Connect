<?php

namespace App\Http\Controllers;

use Hash;
use App\Users;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function index(){
		$users = Users::all();
		return view('users.index')->with('users', $users);
	}

	public function create(){
		$roles = Role::lists('Name','Id');
		//dd($roles);
		return view('users.create')->with('roles', $roles);
	}

	public function getUser($id){
		$user = Users::find($id);
		return view('users.find')->with('user',$user);
	}

	public function save(Request $request){
		//dd($request);
		$this->validate($request,
		[
			'Name'		=> 'required|max:100',
			'Email'		=> 'required|email',
			'Password'	=> 'required|min:6',
			'Role'		=> 'required',
		]
		);
		Users::create([
            'Name' => $request['Name'],
            'Email' => $request['Email'],
            'Role_Id' =>$request['Role'],
            'Password' => Hash::make($request['password']),
        ]);
		return Redirect('users');
	}
}