<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {

        $user = [
            'name' => "Lok",
            'email' => '*************@hotmail.com',
            'telefone' => 'Você ainda não adicionou um telefone.'
        ];

        return view('dashboard', $user);
    }

    public function create(Request $r)
    {
        $validated = $r->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'username' => 'required|max:255',
            'birthday' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        $user = new User();
        $user->name = 'Lok';
        $user->email = $r->email;
        $user->username = $r->username;
        $user->birthday = $r->date;
        $user->password = bcrypt($r->password);

        if ($user->save()) {
            return redirect('login');
        }
    }

    public function logar(Request $r)
    {

        $credentials = $r->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $r->session()->regenerate();
            return redirect('landing');
        }

        return back()->with(
            'email',
            'The provided credentials do not match our records.',
        );
    }
}
