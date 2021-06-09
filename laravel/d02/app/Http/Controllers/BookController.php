<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //lay danh muc sach trong bang tbBOOK, va truyen cho view index
    public function get(){
        $ds = DB::table('tbbook')->get();
        return view('index', compact('ds'));
    }

}
