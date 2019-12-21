<?php

namespace App\Http\Controllers;

use App\book;
use App\user;
use App\comment;
use \Carbon;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = \App\book::all();
		return view('book.index')->with('books',$books);
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
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book,$id,Request $request)
    {
        $books = book::find($id);
        $users = user::all();

        $comments = comment::where('bookId',$id)->get();

        $request->session()->put('bid', $id);
        //echo($comments);
		return view('book.bookdetails')->with('books',$books)->with('comments',$comments)->with('users',$users);
    }
    public function comment(Request $request,$id)
    {
        $mytime = Carbon\Carbon::now();
        $bid= $id;
        //echo($bid);
        $comments = new comment();
        $comments->userId = $request->session()->get('id');
        $comments->bookId =$bid;
        $comments->date =$mytime;
        $comments->details =$request->comment;

		if($comments->save()){
            return redirect()->route('book.show', $bid);
        }else{
            echo "Problem occured";
		}
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function search(book $book,$id)
    {
        $books = book::Where('name', $id)->orWhere('genre', $id)->get();
        return view('book.search')->with('books',$books)->with('key',$id);
    }
    public function searchResult(Request $request)
    {
        $search= $request->search;
        
        $books = book::Where('name', 'like', '%' . $search . '%')
        ->orWhere('genre', 'like', '%' . $search . '%')->orWhere('author', 'like', '%' . $search . '%')
        ->get();
        //echo($search);
        //echo($books);
        return view('book.search')->with('books',$books)->with('key',$search);
    }
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
    }
}
