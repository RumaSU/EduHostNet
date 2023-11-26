<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersLogin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.login.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.login.register.index');
    }
    
    // public function authenticate(Request $request)
    // {
    //     $credentials = request()->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         // Autentikasi berhasil, membuat sesi
    //         // $user = Auth::users();
    //         // session(['users_id' => $user->users_id]);
    //         // $request->session()->put('users_id', $user->users_id);
    //         return redirect()->intended('dashboard');
    //     }
        
    //     return back()->with('message', 'Username atau password salah.');
    // }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $authenticated = Auth::attempt($credentials);

        if ($authenticated) {
            $request->session()->regenerate();
            return redirect()->intended('status');
        }

        return back()->with('message', 'Username atau password salah.');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
