<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\User;

class RegisterController extends Controller
{
    public function register(StoreUserRequest $request)
    {


        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();


        //

    }
}
