<?php

namespace App\Http\Controllers;

use App\user;
use App\book;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = \App\book::all();
		return view('user.index')->with('books',$books);
    }

    public function profile($id)
    {
        $user = user::find($id);
    	return view('user.profile')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user,$id)
    {
        $user = user::find($id);
    	return view('user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {

        $user = user::find($request->id);
        
        $user->name = $request->username;
        $user->address =$request->address;
        $user->phone =$request->phone;
        $user->email =$request->email;
        $user->password =$request->password;
		$user->type =$request->type;

		if($request->hasFile('image')){
            $file = $request->file('image');
            $fname=$file->getClientOriginalName();
            $file->move('upload/image', $fname);
            $user->image =$fname;
		}
		
        if($user->save()){
            return redirect()->route('user.profile',$request->id);
        }else{
            return redirect()->route('user.edit',$request->id);
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
