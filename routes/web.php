<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\{UsersController, FileManagerAdmin, CategoreyController, MoviesController};
use App\Http\Middleware\SetLanguage;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Middleware\AdminAuthenticated;

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
Route::redirect('/admin','/admin/login');
Route::redirect('/','/admin/login');
Route::redirect('/en/admin','/en/admin/categories');
// Route::group(['prefix' => '{language}'], function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
//     Route::get('/home/articles', [HomeController::class, 'articles'])->name('articles');
//     Route::get('/home/articlesingle/{slug}/{uuid}',[HomeController::class, 'articlesingle'])->name('articlesingle');
//     Route::get('/home/offers', [HomeController::class, 'offers'])->name('offers');
//     Route::get('/home/offersingle/{slug}/{uuid}',[HomeController::class, 'offersingle'])->name('offersingle');
//     Route::get('/home/about', [HomeController::class, 'about'])->name('about');
//     Route::get('/home/services', [HomeController::class, 'services'])->name('services');

// });
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('admin/login',[AdminAuthController::class ,'getLogin'])->name('adminLogin');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');

Route::group(['prefix' => '{locale}'], function () {
        Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
        Route::get('dashboard',[AdminController::class ,'index'])->name('dashboard.index');
        // Admin Dashboard
        Route::get('dashboard',[AdminController::class ,'index'])->name('dashboard.index');
        // Admin Articles
        Route::get('movies',[MoviesController::class ,'index'])->name('movies.index');
        Route::get('movies/datatables',[MoviesController::class ,'datatables'])->name('movies.datatables');
        Route::get('movies/create',[MoviesController::class ,'create'])->name('movies.create');
        Route::post('movies/store',[MoviesController::class ,'store'])->name('movies.store');
        Route::post('movies/update/{uuid}',[MoviesController::class ,'update'])->name('movies.update');
        Route::get('movies/edit/{id}',[MoviesController::class ,'edit'])->name('movies.edit');
        Route::get('movies/mycity',[MoviesController::class ,'mycity'])->name('movies.mycity');
        Route::get('movies/status',[MoviesController::class ,'status'])->name('movies.status');
        Route::get('movies/delete',[MoviesController::class ,'delete'])->name('movies.delete');
        // Admin categories
        Route::get('categories',[CategoreyController::class ,'index'])->name('categories.index');
        Route::get('categories/datatables',[CategoreyController::class ,'datatables'])->name('categories.datatables');
        Route::get('categories/create',[CategoreyController::class ,'create'])->name('categories.create');
        Route::post('categories/store',[CategoreyController::class ,'store'])->name('categories.store');
        Route::post('categories/update/{uuid}',[CategoreyController::class ,'update'])->name('categories.update');
        Route::get('categories/edit/{id}',[CategoreyController::class ,'edit'])->name('categories.edit');
        Route::get('categories/status',[CategoreyController::class ,'status'])->name('categories.status');
        Route::get('categories/delete',[CategoreyController::class ,'delete'])->name('categories.delete');
        // Admin Users
        Route::get('users',[UsersController::class ,'index'])->name('users.index');
        Route::get('users/datatables',[UsersController::class ,'datatables'])->name('users.datatables');
        Route::get('users/create',[UsersController::class ,'create'])->name('users.create');
        Route::post('users/store',[UsersController::class ,'store'])->name('users.store');
        Route::post('users/update/{id}',[UsersController::class ,'update'])->name('users.update');
        Route::get('users/edit/{id}',[UsersController::class ,'edit'])->name('users.edit');
        Route::get('users/status',[UsersController::class ,'status'])->name('users.status');
        Route::get('users/delete',[UsersController::class ,'delete'])->name('users.delete');
      
        // Admin Settings
        Route::get('settings',[SettingsController::class ,'index'])->name('settings.index');
        Route::post('settings/store',[SettingsController::class ,'store'])->name('settings.store');
            
    });
});

// File Manager
Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
    // Route::group(['prefix' => 'laravel-filemanager'], function () {
    //     \UniSharp\LaravelFilemanager\Lfm::routes();
    // });
    Route::get('/file-manager', [FileManagerAdmin::class, 'index'])->name('file-manager');
});