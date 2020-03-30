<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $Active_user=Auth::user()->role;
       if ($Active_user=='superadmin')
         {
            return redirect('superadmin');
        }
         elseif ($Active_user=='supervisor') 
        {
            return redirect('supervisor');
        }
        else
        {

                return redirect('student');
        }
    }
}
