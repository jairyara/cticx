<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginView(): Factory|View|Application
    {
        return view('landing.login');
    }

    public function registerView(): Factory|View|Application
    {
        return view('landing.signUp');
    }

    public function store(Request $request): RedirectResponse
    {
        $user = new User([
            "firstname" => $request->name,
            "lastname" => $request->lastname,
            "email" => $request->email,
            "password" => $request->password,
            "university" => $request->university,
            "faculty" => 1,
            "semester" => 1,
            "bornDate" => $request->bornDate,
            "gender" => $request->gender,
            "role" => 2,
        ]);
        $user->save();

        return redirect("/login");
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("home")->withSuccess('Login details are not valid');
    }
}
