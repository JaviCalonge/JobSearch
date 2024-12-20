<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }
    public function store()
    {
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:4', 'confirmed'],
        ]);

        $user = User::create($attributes);

        FacadesAuth::login($user);

        return redirect('/');
    }
}
