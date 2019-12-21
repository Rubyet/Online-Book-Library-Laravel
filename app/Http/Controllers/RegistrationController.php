<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests\registration;

class RegistrationController extends Controller
{
 
	function index(){
		return view('user.reg')->with('yes','yes');

	}

	function save(registration $request){
		
		$file = $request->file('image');
		$fname=$file->getClientOriginalName();

		$user = new user();
        $user->name = $request->username;
        $user->address =$request->address;
        $user->phone =$request->phone;
        $user->email =$request->email;
        $user->password =$request->password;
		$user->type =$request->type;
		$user->image =$fname;

		if($request->hasFile('image')){
            $file->move('upload/image', $fname);
		}
		
        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('reg.index');
		}
		
		
	}
}


