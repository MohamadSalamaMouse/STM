<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    $users = User::all();
    return view('admin.student.index', compact('users'));

    }
    public  function search(Request $request){

        $searchTerm = $request->input('search');

        $results = User::where('id', $searchTerm)->get();

        return view('admin.search_results', ['results' => $results]);
    }
    public function show(User $user)
    {
        return view('user.books' , ['user' => $user]);
    }

    public function borrow(Book $book)
    {
        $book->update([
            'user_id' => auth()->id()
        ]);
        return back();
    }
    public function returnBack(Book $book)
    {
        $book->update([
            'user_id' => null
        ]);
        return back()->with(["success"=>"Book Was Returned Successfully!"]);
    }

}
