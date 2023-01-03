<?php

namespace App\Services\ResourceServices;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService {

    /**
     * Validate store request.
     *
     * Return the validated inputs in a array.
     * If the validation isn't successfull send a response with an error.
     */
    function validateStoreRequest() {
        $validatedInputs = Request()->validate([
            'email' => 'email|unique:users|required',
            'password' => 'required|min:6',
        ]);
        return $validatedInputs;
    }

    /**
     * Validate login request.
     */
    function validateLoginRequest() {
        $credentials = Request()->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);
        return $credentials;
    }

    function createUser($inputs) {
        $newUser = new User();
        $newUser->email = $inputs['email'];
        $newUser->password = Hash::make($inputs['password']);
        $newUser->save();
    }

    /**
     * Try to log the user with the credentials.
     */
    function login($credentials) {
        if(! Auth::guard('web')->attempt($credentials)) {
            return false;
        }
        Request()->session()->regenerate();
        return true;
    }

    public function logout() {
        Auth::guard('web')->logout();
        Request()->session()->regenerate();
        Request()->session()->regenerateToken();
    }
}

