<?php

namespace App\Http\Controllers\front\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\Message_Trait;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use Message_Trait;
    public function show_register(){
        return view("front.register");
    }
    public function register(Request $request){

    }
}
