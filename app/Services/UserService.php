<?php

namespace App\Services;

use App\Models\Level;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService {

    /**
     * Validate store request.
     *
     * Return the validated inputs in a array.
     * If the validation isn't successfull send a response with an error.
     */
    // TODO : make a stronger validation on the password (needed?)
    function validateStoreRequest() {
        $validatedInputs = Request()->validate([
            'cycle' => 'required',
            'classe' => '',
            'serie' => '',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|unique:users|required',
            'password' => 'confirmed|required|min:6',
            'confid-accept' => 'accepted',
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
        $newUser->firstname = $inputs['firstname'];
        $newUser->lastname = $inputs['lastname'];
        $newUser->email = $inputs['email'];
        $newUser->password = Hash::make($inputs['password']);
        // !$newUser->save();
        return $newUser;
    }

    // TODO : Need extension to Universitary levels
    // TODO : move to levelService (needed?)
    function affectLevelToUser(User $user, $cycle, $classe, $serie) {
        $level = Level::getPreUnivLevel($cycle, $classe, $serie);
        $user->level()->associate($level);
        $user->save();
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

    public function getAllUsers() {
        $users = User::All();
        return $users;
    }
}

