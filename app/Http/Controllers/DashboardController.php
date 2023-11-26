<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use App\Models\UsersImageModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = optional(auth()->user())->users_id;
        $allUser = DB::table('users')
            ->select('users.username', 'users_image.nameFile')
            ->join('users_image', 'users.users_id', '=', 'users_image.users_id')
            ->orderByDesc('users.created_at')
            ->get();
        $userImage = DB::table('users_image')
            ->select('nameFile')
            ->where('users_id', '=', $userID)
            ->first();
        $listContents = DB::table('konten')
            ->select('konten.titleKonten', 'konten.konten', 'konten.created_at', 'konten.updated_at', 'users.username', 'users_image.nameFile')
            ->join('users', 'konten.users_id', '=', 'users.users_id')
            ->join('users_image', 'users_image.users_id', '=', 'users.users_id')
            ->orderBy('konten.created_at', 'desc')
            ->limit(5)
            ->get();
        return view('pages.dashboard.index', compact('allUser', 'userImage', 'listContents'));
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
    public function destroy(string $id)
    {
        //
    }
}
