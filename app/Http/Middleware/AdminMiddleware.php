<?php namespace App\Http\Middleware;

use Closure;
use \Auth;
use App\Models\User;

class AdminMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::guest()) {
            return redirect('/');
        } else {
            $user = Auth::user();
            /* @var User $user */

            if(!$user->isAdmin()){
                return redirect('/');
            }
        }

        return $next($request);


    }

}
