<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* AUTHENTIFICATION */

// user
Route::get('/inscription', function () {
    return view('auth.register');
})->name('auth.user.register');
Route::post('/user/store', [UserController::class, 'store'])->name('auth.user.store');
Route::get('/connexion', function () {
    return view('auth.login');
})->name('auth.user.login_page');
Route::post('/user/login', [UserController::class, 'login'])->name('auth.user.login');
Route::get('/deconnexion', [UserController::class, 'logout'])->name('auth.user.logout');
// admin



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/404', function () {
    return view('errors.404');
})->name('404');

Route::get('/forums', function () {
    return view('pages.forums.general');
})->name('forums');

Route::get('/forum', function () {
    return view('pages.forums.details');
})->name('forum');

Route::get('/forums-de-mon-niveau', function () {
    return view('pages.forums.level');
})->name('forums.level');

Route::get('/mes-forums', function () {
    return view('pages.forums.self');
})->name('forums.self');

Route::get('/blog', function () {
    return view('pages.blog.index');
})->name('blog');

Route::get('/article', function () {
    return view('pages.blog.details');
})->name('article');

Route::get('/tableau-de-bord', function () {
    return view('pages.admin.pages.index');
})->name('admin.index');

Route::get('/connexion-admin', function () {
    return view('pages.admin.auth.login');
})->name('admin.index');


Route::get('/retrouver-mon-mot-de-passe', function () {
    return view('auth.forgot-password');
})->name('auth.recovery');

Route::get('/profil', function () {
    return view('pages.profil.index');
})->name('profil.index');

// Les utilisateurs
Route::get('/administrateurs', function () {
    return view('pages.admin.pages.utilisateurs.administrateurs');
})->name('utilisateurs.administrateurs');

Route::get('/eleves', function () {
    return view('pages.admin.pages.utilisateurs.eleves');
})->name('utilisateurs.eleves');

Route::get('/etudiants', function () {
    return view('pages.admin.pages.utilisateurs.etudiants');
})->name('utilisateurs.etudiants');

Route::get('/classes', function () {
    return view('pages.admin.pages.niveaux.classes');
})->name('niveaux.classes');

Route::get('/ajouter-une-classe', function () {
    return view('pages.admin.pages.niveaux.create');
})->name('niveaux.create');
