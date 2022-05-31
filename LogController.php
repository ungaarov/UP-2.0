<?php

namespace App\Http\Controllers;

use App\Models\up;
use Illuminate\Http\Request;
use App\Http\Requests\LogRequest;


class LogController extends Controller
{
    public function submit(LogRequest $req){
        $up = new up();
        $up->email = $req->input('email');
        $up->password = $req->input('password');

        $up->save();

        return redirect()->route('home')->with('success', 'Account');
    }
}
