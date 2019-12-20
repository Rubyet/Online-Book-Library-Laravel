<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request){

		$books = \App\book::all();
		return view('home.index')->with('books',$books);
			
    }
}



