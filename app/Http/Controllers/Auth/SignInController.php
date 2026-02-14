<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInFormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class SignInController extends Controller
{

    public function login():View
    {
       // dd('login');
        return view('auth.login');
    }



    public function handleLogin(SignInFormRequest $request): RedirectResponse
    {

        if (Auth::attempt($request->validated(), true)) { // true означает remember_me
            $request->session()->regenerate();
            return redirect()->back();
        }

            return back()->withErrors([
                'email' => 'Ошибка в поле E-mail или пароль',
            ])->onlyInput('email');

    }





}
