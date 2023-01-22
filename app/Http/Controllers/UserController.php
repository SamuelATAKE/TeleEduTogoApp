<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function userService() {
        return new UserService();
    }

    public function allEleves()
    {
        $users = $this->userService()->getAllUsers();
        // dd($users);
        return view('pages.admin.pages.utilisateurs.eleves', compact('users'));
    }

    public function allEtudiants()
    {
        $users = $this->userService()->getAllUsers();
        return view('pages.admin.pages.utilisateurs.etudiants', compact('users'));
    }

    public function loginPage() {
        return view('auth.login');
    }

    public function store()
    {
        $inputs = $this->userService()->validateStoreRequest();
        if (!Level::isLevelInLevelTree($inputs["cycle"], $inputs["classe"], $inputs["serie"])) {
            return back()->withInput()->withErrors([
                'level' => 'Entrez des un niveau valide',
            ]);
        }
        $newUser = $this->userService()->createUser($inputs);
        $this->userService()->affectLevelToUser($newUser, $inputs["cycle"], $inputs["classe"], $inputs["serie"]);
        $credentials = [
            'email' => $inputs['email'],
            'password' => $inputs['password']
        ];
        $loginSuccess = $this->userService()->login($credentials);
        if (!$loginSuccess) {
            return redirect()->route('auth.user.login_page');
        }
        // dd(Auth::guard('web')->user());
        return redirect()->route('welcome');
    }

    public function register() {
        return view('auth.register')
            ->with("cycles", Level::getAllCyclesInfos())
            ->with("classes", Level::getGlobalClassesInfos())
            ->with("series", Level::getAllSeriesInfos());
    }

    public function login()
    {
        $credentials = $this->userService()->validateLoginRequest();
        $loginSuccess = $this->userService()->login($credentials);

        if (!$loginSuccess) {
            return back()->withInput()->withErrors([
                'credentials' => 'Mot de passe et/ou email incorrect',
            ]);
        }

        return Redirect()->route('welcome');
    }

    public function show()
    {
    }

    public function updatePage() {
        return view('pages.profil.update')
            ->with("cycles", Level::getAllCyclesInfos())
            ->with("classes", Level::getGlobalClassesInfos())
            ->with("series", Level::getAllSeriesInfos());
    }

    public function update() {

    }

    public function logout()
    {
        $this->userService()->logout();
        return redirect()->route('welcome');
    }
}
