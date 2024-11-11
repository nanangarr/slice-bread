<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {

        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
            // Regenerate session to prevent session fixation
            $request->session()->regenerate();

            // Store pelanggan ID in the session
            $request->session()->put('pelanggan_id', Auth::id());

            Alert::success('Success', 'Login success !');
            return redirect()->intended('/');
            } else {
                Alert::error('Error', 'Login failed !');
                return redirect('/login')->withErrors(['email' => 'Email atau password salah.']);
            }
        }

    

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:pelanggan',
            'password' => 'required',
        ]);

        $validated['password'] = Hash::make($request['password']);

        Pelanggan::create($validated);
        Auth::logout();

        Alert::success('Success', 'Register pelanggan has been successfully !');
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::success('Success', 'Log out success !');
        return redirect('/login');
    }
    public function reset(){
        return view('auth.reset', [
            'title' => 'Reset Password',
        ]);
    }
}
