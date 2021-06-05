<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $book = DB::table('tbbook')->get(); //lay het du lieu cua bang tbbook
        return view('book.index',['ds'=>$book]);
    }

    public function create(){
        return view('book.create');
    }

    public function postCreate(Request $request){
        $tua = $request->title;
        $tacgia = $request->author;
        $gia = $request->price;
        $lanxb = $request->edition;

        DB::table('tbbook')->insert(['title'=>$tua, 'author'=>$tacgia,
        'price'=>$gia, 'edition'=>$lanxb]);

        return redirect()->route('book-index');
    }

    public function edit($id){
        $book = DB::table('tbbook')->find($id);
        return view('book.edit', compact('book'));
    }

    public function postEdit(Request $request, $id){
        $tua = $request->title;
        $tacgia = $request->author;
        $gia = $request->price;
        $lanxb = $request->edition;

        DB::table('tbbook')->where('id',$id)->update(['title'=>$tua, 'author'=>$tacgia,
        'price'=>$gia, 'edition'=>$lanxb]);

        return redirect()->route('book-index');
    }

    public function delete($id){
        DB::table('tbbook')->delete($id);
        return redirect()->route('book-index');
    }
}
