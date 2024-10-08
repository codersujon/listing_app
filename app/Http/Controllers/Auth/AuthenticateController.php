<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
     /**
     * Create
     */
    public function create(){
       return Inertia::render('Auth/Login');
    }

    /**
     * Store
     */
    public function store(Request $request){

       $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
       ]);

       if(Auth::attempt($credentials, $request->boolean('remember')))
       {
            $request->session()->regenerate();
            return redirect()->intended();
       }

       return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
       ])->onlyInput('email');
    }

    /**
     * Destroy
     */
    public function destroy(Request $request){
          Auth::logout();
          $request->session()->invalidate();
          $request->session()->regenerate();
          return redirect('/');
    }     
}
