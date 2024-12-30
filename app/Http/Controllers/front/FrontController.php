<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\admin\MainCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view("front.index");
    }
    public function category($slug){
        $category = MainCategory::with('subCategories','products')->where('slug', $slug)->first();
        return view("front.category",compact('category'));
    }
}
