<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Traits\Message_Trait;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    use Message_Trait;

    public function store(Request $request){
        $data = $request->all();
        dd($data);
    }
}
