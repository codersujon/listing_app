<?php

namespace App\Http\Controllers\Auth;

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
       
    }
}
