<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            // Redirect to home if user is not authenticated or not an admin
            return redirect('/login');
        }

         // Check if the authenticated user is an admin
         $user = Auth::user();
         if (!$user->is_admin) {
             // If not an admin, redirect to home or an appropriate page
              
             return abort(403);//redirect('/');
         }

     
        return $next($request);
    }
}
