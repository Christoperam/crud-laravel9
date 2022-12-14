<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create()
    {

        return view('auth.register');
    }

    public function store()
    {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/');
    }
}
