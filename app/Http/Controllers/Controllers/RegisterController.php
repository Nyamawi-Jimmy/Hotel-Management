<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
        ]);

        $user = User::create($attributes);

        if ($user) {
            $role = Role::find(3);

            $user->roles()->attach($role);

            $token = $user->createToken('auth_token')->plainTextToken;
            auth()->login($user);

            return redirect('/dashboard');
        } else {
            throw ValidationException::withMessages([
                'email' => 'Registration Failed'
            ]);
        }
    }
}
