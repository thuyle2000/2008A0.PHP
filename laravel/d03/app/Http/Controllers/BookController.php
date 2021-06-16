<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //lay du lieu cua bang tbbook, goi cho view book.index
    public function get()
    {
        $ds = Book::all();
        return view('admin.book.index', compact('ds'));
    }

    //ham tra ve trang tao 1 quyen sach moi
    public function create()
    {
        return view('admin.book.create');
    }

    //ham insert 1 quyen sach moi vo tbBOOK, sau khi user bam [submit]  ben form Create Book
    public function createPost(Request $request)
    {

        $r = $request->all();
        $imageName = '';
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/book/create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg !');

                // return redirect()->back()->withInput($request->input());
                // return Redirect::back()->withInput(Input::all());
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images", $imageName);
        }

        $b = new Book($r);
        $b->picture = $imageName;

        $b->save(); // insert $b vo bang tbbook

        return redirect('/admin/book'); // quay ve trang book index
    }


    //ham tra ve trang edit book voi tham so truyen cho view la doi tuong book co ma so muon thay doi thong tin
    public function edit($id)
    {
        $book = Book::find($id);
        return view('admin.book.edit', compact('book'));
    }

    //ham cap nhat lai thong tin sach muon thay doi noi dung
    public function editPost(Request $request)
    {

        $r = $request->all();

        $imageName = '';
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/book/create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg, png, jpeg !');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images", $imageName);
        }
        else{
            $b = Book::find($request->id);
            $imageName = $b->picture;
        }

        $b = new Book($r);
        $b->picture = $imageName;
        $b->exists = true;   // save() se hoat dong nhu lenh update, thay vi insert

        $b->save(); // update $b vo bang tbbook

        return redirect('/admin/book'); // quay ve trang book index


    }

    //ham xoa 1 quyen sach theo ma so
    public function delete($id){
        $book = Book::find($id);
        $book->delete();
        return redirect('/admin/book'); // quay ve trang book index
    }
}
