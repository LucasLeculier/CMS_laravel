<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Valider les données du formulaire
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Tenter de connecter l'utilisateur
        if (Auth::attempt($credentials)) {
            // Si l'authentification réussit, rediriger l'utilisateur vers la page d'accueil
            return redirect()->intended('/home');
        } else {
            // Si l'authentification échoue, rediriger l'utilisateur vers la page de connexion avec un message d'erreur
            return redirect()->back()->withErrors(['email' => 'Ces identifiants ne correspondent pas à nos enregistrements.'])->withInput();
        }
    }
}
