<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use App\Models\UsersImageModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UsersModelController extends Controller
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'confPassword' => 'required'
        ]);
        if(!$validatedData) {
            return back()->with('error', 'Fill the form');
        }
        $UsersExists = DB::table('users')->where('username', '=', $request->username)->exists();
        if(!$UsersExists) {
            if($request->password == $request->confPassword) {
                $createUsers = UsersModel::create([
                    'username' => $request->username,
                    'password' => bcrypt($request->password)
                ]);
                if($createUsers) {
                    UsersImageModels::create([
                        'nameFile' => 'users.jpg',
                        'users_id' => $createUsers->users_id,
                    ]);
                    // Autentikasi setelah registrasi berhasil
                    Auth::login($createUsers);
                    $request->session()->regenerate();
                    return redirect()->intended('status');
                } else {
                    return back()->with('error', 'Something error');
                }
            } else {
                return back()->with('errorPassword', 'Password tidak sama');
            }
        } else {
            return back()->with('errorUsername', 'Username sudah ada');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:100'
        ]);
        if ($validatedData) {
            $userID = auth()->user()->users_id;
            $findUser = UsersModel::where('username', $validatedData['username'])
                ->where('users_id', $userID)
                ->first();
            $findImage = DB::table('users_image')
                ->select('nameFile')
                ->where('users_id', '=', $userID)
                ->first();
            
            if(!$findUser) {
                return redirect()->back()->with('error', 'Username tidak ditemukan');
            }
            
            Storage::delete('public/images/users/'. $findImage->nameFile);
            $findUser->delete();
            Auth::logout();
            
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login');
        } else {
            return redirect()->back()->with('error', 'Masukkan username dengan benar');
        }
    }
}
