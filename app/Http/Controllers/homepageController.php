<?php

namespace App\Http\Controllers;

use App\Models\statusModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function index()
    {
        $userID = optional(auth()->user())->users_id;
        $listContents = DB::table('konten')
            ->select('konten.titleKonten', 'konten.konten', 'konten.created_at', 'users.username', 'users_image.nameFile')
            ->join('users', 'konten.users_id', '=', 'users.users_id')
            ->join('users_image', 'users_image.users_id', '=', 'users.users_id')
            ->orderBy('konten.created_at', 'desc')
            ->limit('3')
            ->get();
        $totalPost = DB::table('konten')->where('users_id', '=', $userID)->count();
        $userImage = DB::table('users_image')->where('users_id', '=', $userID)->first();
        return view('pages.homepage.index', compact('listContents', 'totalPost', 'userImage'));
    }
}
