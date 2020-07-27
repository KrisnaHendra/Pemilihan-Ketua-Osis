<?php

namespace App\Http\Middleware;

use Closure;

class NewMiddleware
{
    public function handle($request, Closure $next)
    {
      $user = Auth::user();
      if($user->role_id === 1) {
          return $next($request);
      }
      return redirect('home');
    }
}

?>
