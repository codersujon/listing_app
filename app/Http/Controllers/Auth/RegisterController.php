<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Create
     */
    public function create(){
        return Inertia::render('Auth/Register');
    }

    /**
     * Store
     */
    public function store(Request $request){
        sleep(1); // just for testing purpose
        $credentials = $request->validate([
            "name" => "required|max:255",
            "email" => "required|lowercase|email|max:255",
            "password" => "required|confirmed|min:8",
        ]);

        $user = User::create($credentials);

        // send verification email
        Auth::login($user);

        return redirect()->route('home');
    }
}
