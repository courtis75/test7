<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $data = $request->validate(
        [

            'email' => ['required','email','exists:users'],
            'password' =>['required','min:6'],
        ]);

        $user = User::where('email',$data['email'])->first();

        //if(Auth::attempt([$data['email'],$data['password']]))
        if(!$user || !Hash::check($data['password'],$user ->password))
        {
            return response()->json([
                   'data'=> null,
                   'messsage' => 'Wrong Credentials',
            ],401);
        }
        $token = $user->createToken('auth_token')->plainTextToken;
        return 
        
            response()->json(['user' => $user,
               'token' => $token]);

        
    }
}
