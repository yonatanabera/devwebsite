<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name'=>['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password'=>['required', 'min:8', 'confirmed']
        ]);

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)

        ]);

        auth()->login($user);

        return response()->json(Auth::user(), 200);
    }
}
