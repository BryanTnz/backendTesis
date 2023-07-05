<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class RegisterController extends Controller
{
    //register
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->dni = $request->dni;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->password = Hash::make($request->password);
        $user->role_id = 3;
        $user->gender = $request->gender;
        $user->fat = $request->fat;
        $user->state = $request->state;
        $user->save();
    

    return response()->json(['message' => 'User registered successfully'], 201);
    }

}




