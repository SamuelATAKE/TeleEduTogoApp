<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function store() {
        $inputs = $this->userService->validateStoreRequest();
        $this->userService->createUser($inputs);
        $credentials = [
            'email' => $inputs['email'],
            'password' => $inputs['password']
        ];
        $loginSuccess = $this->userService->login($credentials);
        if(! $loginSuccess) {
            return redirect()->route('auth.user.login_page');
        }
        // dd(Auth::guard('web')->user());
        return redirect()->route('welcome');
    }

    public function login() {
        $credentials = $this->userService->validateLoginRequest();
        $loginSuccess = $this->userService->login($credentials);

        if(! $loginSuccess) {
            return back()->withInput()->withErrors([
                'credentials' => 'Mot de passe et/ou email incorrect',
            ]);
        }

        return Redirect()->route('welcome');
    }

    public function show() {

    }

    public function update() {

    }

    public function logout() {
        $this->userService->logout();
        return redirect()->route('welcome');
    }

}
