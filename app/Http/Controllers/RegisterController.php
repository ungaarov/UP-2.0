<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){
        if (Auth::check()){
            return redirect(route('user.startpage'));
        }
        $validateFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(User::where('email', $validateFields['email'])->exists()){
            return redirect(route("user.registration"))->withErrors([
                'formError'=> "such a user already exists"
            ]);
        }
        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route("user.startpage"));
        }
        return redirect(route("user.login"))->withErrors([
            'formError'=> "an error occurred while saving the user"
        ]);
    }
}
