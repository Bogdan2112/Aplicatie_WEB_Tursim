<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Check if credentials match admin/admin
        if ($request->name === 'admin' && $request->password === 'admin') {
            // Store admin session
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.edit');
        }

        // If credentials don't match, redirect back with error
        return redirect()->route('login')->with('error', 'Wrong username or password');
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('login');
    }
} 