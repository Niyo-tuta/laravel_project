<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
class BookController extends Controller
{
   public function books(){
    return view('books.book');
   }
   public function save(Request $request){
    // dd($request);
    $data=$request->validate([
        'book_name'=>'required'

    ]);
    $newbook = Book::create($data);
    return redirect(route('user.select'));
   }
   public function select(){
    $user=Book::all();
    return view('books.select',['user'=>$user]);
}
public function edit(book $book){
    return view('books.update',['book'=>$book]);
}
public function update(book $book,Request $request){
    $update = $request->validate([
        'book_name' => 'required',
    ]);

    $book->update($update);
 return redirect(route('user.select'));
}
    

public function destroy(book $book){
    $book->delete();
     return redirect(route('user.select'));
}
}
