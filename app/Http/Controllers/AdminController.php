<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Services\AppServices;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public $appService;

    public function __construct(AppServices $appServ)
    {
        $this->appService = $appServ;
    }

    public function get_login() {
        $this->appService->first_login();
        return view('auth.admin-login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::guard('admin')->attempt($credentials)) {
            return back()->withInput()->withErrors([
                'credentials' => 'Veillez entrer un email et un mot de passe valides.',
            ]);
        }
        Request()->session()->regenerate();
        return redirect()->route('admin.user-create-page');
    }

    public function logout() {
        Auth::guard('admin')->logout();
        Request()->session()->regenerate();
        Request()->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
