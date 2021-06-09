<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    //tra ve view listing danh sach users
    public function index()
    {
        $ds = DB::table('tbuser')->get();
        // return view("admin.index")->with('ds',$ds);
        // return view("admin.index",['ds'=>$ds]);
        return view("admin.index", compact('ds'));
    }

    //tra ve view tao 1 tai khoan user moi
    public function create()
    {
        return view("admin.create");
    }

    //luu du lieu input tu form create-user vo database
    public function createPost(Request $request)
    {
        //lay du lieu tren form nhap tu bien $request
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;

        //insert vo bang tbuser
        DB::table('tbuser')->insert([
            "username" => $username,
            "email" => $email,
            "password" => $password,
            "role" => $role,
            "active" => '1'
        ]);

        //tro ve trang admin.index
        // return redirect()->action([AccountController::class, 'index']);
        // return redirect()->route("userlist");
        return redirect()->route("adminuserlist");
    }

    //reset password theo ma so duoc truyen
    public function resetPassword($id)
    {
        DB::table('tbuser')->where('id', $id)->update(["password" => '123']);
        // return redirect("admin/users");
        // return redirect()->route("userlist");
        return redirect()->route("adminuserlist");
    }


    //xem thong tin profile cua user khi biet id
    public function details($id)
    {
        $user = DB::table('tbuser')->find($id);
        return view("user.profile", compact('user'));
    }


    //mo trang login
    public function login()
    {
        return view("login");
    }

    //kiem tra tai khoan dang nhap
    public function checkLogin(Request $request)
    {
        if($request->session()->has('user')){
            $request->session()->forget('user');
        }

        $username = $request->username;
        $password = $request->password;

        $user = DB::table('tbuser')->where("username", $username)->first();
        if ($user != null && $user->password == $password) {

            //tao bien session de luu thong tin TK dang nhap thanh cong
            $request->session()->put('user', $user);  //push() luu bien mang

            if ($user->role == 1) {
                // return redirect("admin/users");
                // return redirect()->route("userlist");
                return redirect()->route("adminuserlist");
            } else {
                return redirect("user/profile/" . $user->id);
            }
        } else {
            return redirect("login")->with("message", "Login fail, try again !");
        }
    }

    //logout
    public function logout(Request $request){

        $request->session()->invalidate();

        // xoa session user
        // $request->session()->forget('user');

        return redirect('home');

    }
}
