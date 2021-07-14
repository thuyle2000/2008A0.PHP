<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookPageController extends Controller
{
    //
    public function index()
    {
        // $data = Book::paginate(5);
        $data = DB::table('tbbook')->simplePaginate(4);
        return view('front.book.index', compact('data'));
    }

    function fetch(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('tbbook')->simplePaginate(4);
            return view('front.book.index.pagination', compact('data'))->render();
        }
    }
}
