<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //lay du lieu cua bang tbbook, goi cho view book.index
    public function get(){
        $ds = Book::all();
        return view('admin.book.index', compact('ds'));
    }
}
