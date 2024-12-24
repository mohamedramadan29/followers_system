<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\admin\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status',1)->orderBy('id','desc')->paginate(6);
        return view('front.blog.blog',compact('blogs'));
    }
    public function show($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        return view('front.blog.blog_details',compact('slug'));
    }
}
