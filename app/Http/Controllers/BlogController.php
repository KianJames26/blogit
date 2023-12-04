<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function index(){
        if(isset(request()->search)){
            $searchedBlogs = Blog::latest()->search(request()->search)->paginate(12);
            return view('pages.blog.search')->with([
                'user' => Auth::user(),
                'searchedBlogs' => $searchedBlogs,
            ]);

        }else{
            $latestBlogs = Blog::latest()->take(3)->get();
            $blogs = Blog::latest()->paginate(12);
            return view('pages.blog.index')->with([
                'user' => Auth::user(),
                'latestBlogs' => $latestBlogs,
                'blogs' => $blogs
            ]);
        }

    }
    public function show($id){
        $blog = Blog::findOrFail($id);
        return view('pages.blog.show', ['user' => Auth::user(), 'blog'=>$blog]);
    }
}
