<?php

namespace App\Http\Controllers;

use App\Services\AdminService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    private $adminService;

    public function __construct(AdminService $adminService) {
        $this->adminService = $adminService;
    }

    public function store() {
        $inputs = $this->adminService->validateStoreRequest();
        $this->adminService->createAdmin($inputs);
        // $credentials = [
        //     'email' => $inputs['email'],
        //     'password' => $inputs['password']
        // ];
        $loginSuccess = $this->adminService->login($inputs);
        if(! $loginSuccess) {
            return back()->withInput()->withErrors([
                'credentials' => 'Mot de passe et/ou email incorrect',
            ]);
        }
        return redirect()->route('admin.admin-create-page');
    }

    public function login() {
        $credentials = $this->adminService->validateLoginRequest();
        $loginSuccess = $this->adminService->login($credentials);

        if(! $loginSuccess) {
            return back()->withInput()->withErrors([
                'credentials' => 'Mot de passe et/ou email incorrect',
            ]);
        }

        return redirect()->route('admin.home');
    }

    public function show() {

    }

    public function update() {

    }

    public function logout() {
        $this->adminService->logout();
        return redirect()->route('admin.login');
    }

}
