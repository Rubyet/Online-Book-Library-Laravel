<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){
		
		if($user = user::where('name', $request->username)
		->where('password', $request->password)
		->first())
		{
			$request->session()->put('id', $user->id);
			$request->session()->put('name', $user->name);
			$request->session()->put('type', $user->type);
		
			return redirect()->route('user.index');
		}else{

			$request->session()->flash('msg', 'invalid username/password');

			return redirect()->route('login.index');
		}

	}
}


