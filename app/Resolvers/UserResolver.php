<?php

namespace App\Resolvers;

use Illuminate\Support\Facades\Auth;

class UserResolver implements \OwenIt\Auditing\Contracts\UserResolver
{
    public static function resolve()
    {
        return new UserResolver();
    }

    public function getAuthIdentifier()
    {
        // return Auth::user()->id;
        return 1;
    }

    public function getMorphClass()
    {
        return \App\Models\User::class;
    }
}
