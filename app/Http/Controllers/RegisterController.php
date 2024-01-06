<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;

//cara agar flash tidak merah
use Illuminate\Support\Facades\Session;



use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'name' => 'required|max:255',
           'username' => 'required|min:3|max:255|unique:users',
           'email' => 'required|email:dns|unique:users',
           'password' => 'required|min:5|max:255',
           'gender' => 'required|in:MALE,FEMALE',
           'birth' => 'required|date|before_or_equal:' . Carbon::now()->subYears(13)->format('m-d-Y')
       ]);

       User::create($validatedData);
       
       return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
