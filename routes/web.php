<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NiveauController;
use App\Models\Level;
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
    // TODO : move to controller file
    return view('auth.register')
        ->with("cycles", Level::getAllCyclesInfos())
        ->with("classes", Level::getGlobalClassesInfos())
        ->with("series", Level::getAllSeriesInfos());
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

Route::get('/blog', [ArticleController::class, 'index'])->name('blog');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article');

Route::post('/ajout-article', [ArticleController::class, 'store'])->name('article.store');

Route::post('/ajout-commentaire', [CommentaireArticleController::class, 'store'])->name('article.commentaire.store');

Route::get('/ajouter-article', function () {
    return view('pages.blog.create');
})->name('article.add');

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
Route::get('/administrateurs', [AdminController::class, 'index'])->name('utilisateurs.administrateurs');

Route::get('/eleves', [UserController::class, 'allEleves'])->name('utilisateurs.eleves');

Route::get('/etudiants', [UserController::class, 'allEtudiants'])->name('utilisateurs.etudiants');

Route::get('/classes', [NiveauController::class, 'index'])->name('niveaux.classes');

Route::get('/ajouter-une-classe', function () {
    return view('pages.admin.pages.niveaux.create');
})->name('niveaux.create');

Route::post('/ajout-de-la-classe', [NiveauController::class, 'store'])->name('niveaux.store');
