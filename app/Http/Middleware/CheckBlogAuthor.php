<?php

namespace App\Http\Middleware;

use App\Models\Blog;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckBlogAuthor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $blog = Blog::findOrFail($request->id);

        if($blog->user_id == Auth::user()->id){
            return $next($request);
        }else{
            session()->flash('toast', "You Cannot Edit this blog!");
            return redirect()->route('account.show', ['id' => Auth::user()->id]);
        }

    }
}
