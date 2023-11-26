<?php

namespace App\Http\Controllers;

use App\Models\statusModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class statusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = optional(auth()->user())->users_id;
        $listContents = DB::table('konten')
            ->select('konten.titleKonten', 'konten.konten', 'konten.created_at', 'users.username', 'users_image.nameFile')
            ->join('users', 'konten.users_id', '=', 'users.users_id')
            ->join('users_image', 'users_image.users_id', '=', 'users.users_id')
            ->orderBy('konten.created_at', 'desc')
            ->get();
        $totalPost = DB::table('konten')->where('users_id', '=', $userID)->count();
        $userImage = DB::table('users_image')->where('users_id', '=', $userID)->first();
        return view('pages.status.index', compact('listContents', 'totalPost', 'userImage'));
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
        $validateInput = request()->validate([
            'titleContn' => 'required'
        ]);
        if ($validateInput) {
            $create = statusModels::create([
                'titleKonten' => $request->titleContn,
                'konten' => $request->userContent,
                'users_id' => auth()->user()->users_id,
            ]);
            return redirect()->back();
        }
        
        return back()->with('error', 'Isi judul');
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
