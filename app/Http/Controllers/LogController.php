<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LogRequest;


class LogController extends Controller
{
    public function showLoginForm(){
        return view("login");
    }
    public function showRegistrationForm(){
        return view("registration");
    }
    public function registration(Request $request){
        $request->validate([
        "email"=>["required", "email", "string"],
        "password"=>["required", "confirmed"]
    ]);
    }
}
//{
//    public function submit(LogRequest $req){
//        $up = new up();
//        $up->email = $req->input('email');
//        $up->password = $req->input('password');
//
//        $up->save();
//
//        return redirect()->route('home')->with('success', 'Account');
//    }
//
//    public function allData(){
//     $up = new up();
//     $up -> all();
//    }
//
//    public function registration(){
//        return view("auth.registration");
//    }
//}
