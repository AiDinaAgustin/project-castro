<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.index', [
            "title" => "Profile",
            "user" => auth()->user()
        ]);
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
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'gender' => 'required|in:MALE,FEMALE',
            'birth' => 'required|date|before_or_equal:',
             'image' => 'image|file|max:1999'
            
        ]);
 
        //jika user mengupload gambar
        if($request->file('image')){
         $validatedData['image'] = $request->file('image')->store('user-images');
         }
 
        User::create($validatedData);
        
        return redirect('/profile')->with('success', 'Berhasil menambahkan user baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('profile.edit', [
            "title" => "Edit Profile",
            "user" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // $rules = [
        //     'name' => 'required|max:255',
        //     'username' => 'required|min:3|max:255|unique:users',
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:5|max:255',
        //     'gender' => 'required|in:MALE,FEMALE',
        //     'birth' => 'required|date|before_or_equal:',
        //     'image' => 'image|file|max:1999'
            
        // ];

        
        // $validatedData = $request->validate($rules);

        // if($request->file('image')){
        //     //jika user mengupload gambar maka gambar yang lama akan dihapus
        //     if($request->oldImage){
        //         Storage::delete($request->oldImage);
        //     }
        //     $validatedData['image'] = $request->file('image')->store('podcast-images');
        // }

        // $user::where('id', $user->id)
        //     ->update($validatedData);

        // return redirect('/profile')->with('success', 'Profile berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
