<?php

namespace App\Http\Controllers;

use App\Models\UsersImageModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class UsersImageModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(UsersImageModels $usersImageModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsersImageModels $usersImageModels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UsersImageModels $usersImageModels)
    {
        $userID = auth()->user()->users_id;
        
        $checkInp = request()->validate([
            'imageUser' => 'required|image',
        ]);
        if ($checkInp) {
            $checkImage = DB::table('users_image')
                ->select('nameFile')
                ->where('users_id', '=', $userID)->first();
            if ($checkImage->nameFile === 'user.png') {
                if ($request->hasFile('imageUser')) {
                    $image = $request->file('imageUser');
                    $imageName = $image->hashName(); // Menamai gambar
                    $image->storeAs('public/images/users/'. $imageName); // Simpan gambar di direktori 'images' dalam direktori publik
                    
                    // Perbarui record dengan ID yang sesuai
                    $usersImage = UsersImageModels::where('users_id', $userID)->update([
                        'nameFile' => $imageName
                    ]);
                    
                    if ($usersImage) {
                        return redirect()->back();
                    } else {
                        return redirect()->back()->with('error', 'Gagal memperbarui gambar.');
                    }
                } else {
                    return redirect()->back()->with('error', 'Gagal menghapus gambar lama.');
                }
            } else {
                $deleteImg = Storage::delete('public/images/users/'. $checkImage->nameFile);
                if($deleteImg) {
                    if ($request->hasFile('imageUser')) {
                        $image = $request->file('imageUser');
                        $imageName = $image->hashName(); // Menamai gambar
                        $image->storeAs('public/images/users/'. $imageName); // Simpan gambar di direktori 'images' dalam direktori publik
                        
                        $usersImage = UsersImageModels::where('users_id', $userID)->update([
                            'nameFile' => $imageName
                        ]);
                        
                        if ($usersImage) {
                            return redirect()->back();
                        } else {
                            return redirect()->back()->with('error', 'Gagal memperbarui gambar.');
                        }
                    }
                }
            }
        }
        return redirect()->back()->with('error', 'sdada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsersImageModels $usersImageModels)
    {
        //
    }
}
