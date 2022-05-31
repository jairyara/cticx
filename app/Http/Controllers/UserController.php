<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    use AuthenticatesUsers;

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
            "password" => password_hash($request->password, PASSWORD_ARGON2ID),
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

        $user = User::all()->where("email", $request->user);

        if ($user->first() === null) {
            return redirect()->back()->with('message', 'Usuario no registrado');
        }

        if (!password_verify($request->password, $user->first()->password)) {
            return redirect()->back()->with('message', 'Contraseña incorrecta');
        }

        Session::put("user", $user->first());

        return redirect('home')->withSuccess(true);
    }
}
