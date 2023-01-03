<?php

namespace App\Http\Controllers;

use App\Services\ResourceServices\UserService;
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
            return back()->withInput()->withErrors([
                'credentials' => 'Mot de passe et/ou email incorrect',
            ]);
        }
        return redirect()->route('admin.user-create-page');
    }

    public function login() {
        $credentials = $this->userService->validateLoginRequest();
        $loginSuccess = $this->userService->login($credentials);

        if(! $loginSuccess) {
            return back()->withInput()->withErrors([
                'credentials' => 'Mot de passe et/ou email incorrect',
            ]);
        }

        return Redirect()->route('user.home');
    }

    public function show() {

    }

    public function update() {

    }

    public function logout() {
        Auth::guard('web')->logout();
        Request()->session()->regenerate();
        Request()->session()->regenerateToken();
        return redirect()->route('user.login');
    }

}
