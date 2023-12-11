<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDO;

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
    public function create(){
        return view('pages.blog.create', ['user' => Auth::user()]);
    }
    public function store(Request $request){
        $blogImage = "";
        $validated = $request->validate([
            'blog_title' => ['required', 'min:5', 'max:255'],
            'blog_description' => ['required', 'min:10'],
        ]);

        $blog = Blog::create([
            'blog_title' => $request->blog_title,
            'blog_description' => $request->blog_description,
            'blog_image' => $blogImage,
            'user_id' => Auth::user()->id,
        ]);
        if ($request->hasFile('blog_image')) {
            $customFileName = "blog". $blog->id . "_image" . '.' . $request->file('blog_image')->getClientOriginalExtension();
            $filePath = $request->file('blog_image')->storeAs('uploads/blog_images', $customFileName, 'public');
            $blogImage = Storage::url($filePath);

            $blog->blog_image = $blogImage;
            $blog->save();
        }
        session()->flash('toast', 'Blog Created Successfully!');
        return redirect()->route('blog.index');
    }
    public function edit($id){
        $blog = Blog::findOrFail($id);
        return view('pages.blog.edit', ['user' => Auth::user(), 'blog'=>$blog]);
    }
    public function update(Request $request){
        $id = $request->id;
        $validated = $request->validate([
            'blog_title' => ['required', 'min:5', 'max:255'],
            'blog_description' => ['required', 'min:10'],
        ]);
        $blog = Blog::findOrFail($id);

        $blogImage = $blog->blog_image;
        $blog->blog_title = $validated['blog_title'];
        $blog->blog_description = $validated['blog_description'];
        $blog->save();

        if ($request->hasFile('blog_image')) {
            $customFileName = "blog". $blog->id . "_image" . '.' . $request->file('blog_image')->getClientOriginalExtension();
            $filePath = $request->file('blog_image')->storeAs('uploads/blog_images', $customFileName, 'public');
            $blogImage = Storage::url($filePath);

            $blog->blog_image = $blogImage;
            $blog->save();
        }

        session()->flash('toast', 'Blog Edited Successfully!');
        return redirect()->route('account.show', ['id' => Auth::user()->id]);
    }
    public function destroy($id){
        $blog = Blog::findOrFail($id);

        $blog->delete();
        session()->flash('toast', 'Blog Deleted Successfully!');
        return redirect()->route('account.show', ['id' => Auth::user()->id]);
    }
}
