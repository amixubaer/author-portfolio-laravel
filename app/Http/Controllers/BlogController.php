<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index',compact('blogs'));
    }


    public function show()
    {
        if(!request()->has('id') || !Blog::where('id','=',request('id'))->exists() ){
            abort(404,'Page Not Found');
        }
        $blog = Blog::where('id','=',request('id'))->take(1)->get()[0];
        return view('blogs.show',compact('blog'));
    }
}
