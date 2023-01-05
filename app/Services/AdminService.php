<?php

namespace App\Services;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminService {

    /**
     * Validate store request.
     *
     * Return the validated inputs in a array.
     * If the validation isn't successfull send a response with an error.
     */
    function validateStoreRequest() {
        $validatedInputs = Request()->validate([
            'email' => 'email|unique:admins|required',
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

    function createAdmin($inputs) {
        $newAdmin = new Admin();
        $newAdmin->email = $inputs['email'];
        $newAdmin->password = Hash::make($inputs['password']);
        $newAdmin->save();
    }

    /**
     * Try to log the user with the credentials.
     */
    function login($credentials) {
        if(! Auth::guard('admin')->attempt($credentials)) {
            return false;
        }
        Request()->session()->regenerate();
        return true;
    }

    public function logout() {
        Auth::guard('admin')->logout();
        Request()->session()->regenerate();
        Request()->session()->regenerateToken();
    }
}

