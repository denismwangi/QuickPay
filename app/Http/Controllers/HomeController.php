<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('front');
    }

    public function paxful()
    {
        return view('auth.paxful');
    }

    public function nones()
    {
        return view('auth.noones');
    }


    public function checkUserRole() {
        // Check if the user is authenticated
        if (auth()->check()) {
            $userRole = Auth::user()->role;
            return response()->json(['role' => $userRole]);
        }

        return response()->json(['role' => null]);
    }
}
