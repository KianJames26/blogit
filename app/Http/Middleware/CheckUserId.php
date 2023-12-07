<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->route('id') != Auth::user()->id){
            session()->flash('toast', "You're not authorize to access that!");
            return redirect()->route('account.show', ['id' => Auth::user()->id]);
        };
        return $next($request);
    }
}
