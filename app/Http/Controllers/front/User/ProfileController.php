<?php

namespace App\Http\Controllers\front\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view("front.users.profile");
    }
}
