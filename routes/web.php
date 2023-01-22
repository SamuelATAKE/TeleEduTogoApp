<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContributionsController;
use App\Http\Controllers\ContributionsFilesController;
use App\Http\Controllers\ForumController;
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

Route::get('/forums',[ForumController::class, 'index'])->name('forums');
Route::post('/forums',[ForumController::class, 'store'])->name('forums.store')->middleware('auth');
Route::get('/forums/{slug}',[ForumController::class, 'indexCatDetails'])->name('forums.catDetails');

Route::get('/forum/{slug}',[ForumController::class, 'showForumDetails'])->name('forum');

Route::get('/forums-de-mon-niveau', function () {
    return view('pages.forums.level');
})->name('forums.level');

Route::get('/mes-forums',[ForumController::class,'personalForums'])->name('forums.self');

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

Route::get('/contributions/new', [ContributionsController::class, 'create'])
    ->name('contributions.create');
Route::post('/contributions/post', [ContributionsController::class, 'store'])
    ->name('contributions.post');

Route::get('/contributions', [ContributionsController::class, 'index'])
    ->name('contributions');

Route::get('/{contributions}/show', [ContributionsController::class, 'show'])
    ->name('contribution.{contributions}.show');

Route::get('/download/{contributions}/files', [ContributionsController::class, 'download'])
    ->name('download.{contributions}.files');

Route::get('/download/{contributionsFiles}', [ContributionsFilesController::class, 'show'])
    ->name('download.{contributionsFiles}.show');

/* Admin routes */

Route::get('/admin/contributions', [ContributionsController::class, 'admin_index'])
    ->name('admin.contributions.list');

Route::get('/admin/contributions/non_validated', [ContributionsController::class, 'non_validated'])
    ->name('admin.contribution.non_validated');

Route::get('/admin/{contributions}/show', [ContributionsController::class, 'admin_show'])
    ->name('admin.contribution.{contributions}.show');

Route::get('/admin/validate/{contributions}', [ContributionsController::class, 'validation'])
    ->name('admin.contribution.{contributions}.validate');

Route::get('/admin/delete/{contributions}', [ContributionsController::class, 'destroy'])
    ->name('admin.contribution.{contributions}.destroy');

Route::get('/admin/category/new', [CategoryController::class, 'create'])
    ->name('admin.category.create');

Route::post('/admin/category/post', [CategoryController::class, 'store'])
    ->name('admin.category.store');

Route::get('/admin/category/{category}/destroy', [CategoryController::class, 'destroy'])
    ->name('admin.category.{category}.destroy');

Route::get('/admin/category/{category}/show', [CategoryController::class, 'show'])
    ->name('admin.category.{category}.show');
