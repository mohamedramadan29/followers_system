<?php

namespace App\Http\Controllers\front\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\Message_Trait;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use Message_Trait;
    public function show_login(){

        return view("front.login");

    }
    public function login(Request $request){

    }
}
