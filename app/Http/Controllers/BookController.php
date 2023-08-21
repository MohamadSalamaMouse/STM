<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  $books = Book::all();

        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors=Author::all();
        $categories=Category::all();
        return view('admin.book.create',compact('authors','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {

     $request->validated();

     $book=new Book();
     $book->title=$request->title;
     $book->description=$request->description;
     $book->price=$request->price;
     $book->author_id=$request->author_id;
     $book->category_id=$request->category_id;
     if($request->hasFile('cover')){
         $image=$request->file('cover');
         $imageName=time().'.'.$image->getClientOriginalExtension();
         $image->move(public_path('images/books'),$imageName);
         $book->cover=$imageName;
     }
     $book->save();
     return redirect()->route('Admin.book.index')->with('success', 'Book created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('Admin.book.index')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $image=$book->cover;
        $book->delete();
        if(file_exists(public_path('images/books'.$image))){
            unlink(public_path('images/books'.$image));
        }
        return redirect()->route('Admin.book.index')->with('success', 'Book deleted successfully');
    }

    public function borrow(){
        $books= Book::whereNotNull('user_id')->get();
        return view('admin.book.borrow',compact('books'));

    }

}
