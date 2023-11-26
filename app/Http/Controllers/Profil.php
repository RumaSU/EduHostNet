<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use App\Models\UsersImageModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Profil extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listContents = DB::table('konten')
            ->select(
                'konten.titleKonten',
                'konten.konten',
                'konten.created_at',
                'users.username',
                'users_image.nameFile'
                )
            ->join('users', 'konten.users_id', '=', 'users.users_id')
            ->join('users_image', 'users_image.users_id', '=', 'users.users_id')
            ->orderBy('konten.created_at', 'desc')
            ->where('konten.users_id', '=', auth()->user()->users_id)
            ->get();
        $totalPost = DB::table('konten')->where('users_id', '=', auth()->user()->users_id)->count();
        $userImage = DB::table('users_image')
            ->select('nameFile')
            ->where('users_id', '=', auth()->user()->users_id)
            ->first();
        return view('pages.profil.index', compact('listContents', 'totalPost', 'userImage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $username)
    {
        $listContents = DB::table('konten')
            ->select(
                'konten.titleKonten',
                'konten.konten',
                'konten.created_at',
                'users.username',
                'users_image.nameFile'
                )
            ->join('users', 'konten.users_id', '=', 'users.users_id')
            ->join('users_image', 'users_image.users_id', '=', 'users.users_id')
            ->orderBy('konten.created_at', 'desc')
            ->where('users.username', '=', $username)
            ->get();
        $userData = DB::table('users')
            ->select('username', 'created_at')
            ->where('username', '=', $username)
            ->first();
        $totalPost = DB::table('konten')
            ->select('konten.konten')
            ->join('users', 'konten.users_id', '=', 'users.users_id')
            ->where('users.username', '=', $username)->count();
        $userImage = DB::table('users_image')
            ->select('users_image.nameFile')
            ->join('users', 'users_image.users_id', '=', 'users.users_id')
            ->where('users.username', '=', $username)
            ->first();
        return view('pages.profil.index', compact('listContents', 'totalPost', 'userImage', 'userData'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
