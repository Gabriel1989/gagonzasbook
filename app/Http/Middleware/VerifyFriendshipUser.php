<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class VerifyFriendshipUser
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
        $followers = User::where('id', '=', $request->id)->first();
        $idAuth = auth()->user()->id;
        
        if($followers == null)
        {
            return response('FORBIDDEN 403= No puedes seguir porque tú no eres amigo de este usuario. No puedes ver su perfil', 403);
        }
        else
        {
            foreach($followers->followers as $follower)
            {
                if($follower->id == $idAuth)
                {
                    return $next($request);
                }

            }
        }
        
        

        return response('FORBIDDEN 403= No puedes seguir porque tú no eres amigo de este usuario. No puedes ver su perfil', 403);
        
    }
}
