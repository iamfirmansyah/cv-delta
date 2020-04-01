<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $blogs = Blog::latest()->paginate(3);
        return view('index',compact('blogs'))
                ->with('i',(request()->input('page', 1) -1) *5);
    }
}
