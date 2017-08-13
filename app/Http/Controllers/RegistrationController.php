<?php

namespace App\Http\Controllers;

use App\login;
use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration/create');
    }
    public function store(){

        $this->validate(request(),[
            'name'=>'required',
            'email'=>'reqired|email',
            'password'=>'required|confirmed'
        ]);

        $user = User::create(
            request(['name','email','password'])
        );
        auth()->login($user);
        \Mail::to($user)->send(new Welcome);

        return redirect()->home();
    }
}
