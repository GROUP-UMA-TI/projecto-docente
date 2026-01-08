<?php

namespace App\Repositories\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthRepository implements AuthRepositoryInterface
{
    public function validarPassword($password)
    {
        $passwordUser = Auth::user()->password;
        return Hash::check($password, $passwordUser);
    }
}
