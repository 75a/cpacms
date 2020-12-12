<?php

use App\Models\Post;
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

Route::get('/', 'App\Http\Controllers\HomeController@index');


Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', 'App\Http\Controllers\DashboardController@index')
    ->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
    ->post('/dashboard', 'App\Http\Controllers\DynamicAppSettingsController@store')
    ->name('dashboard.store');


// Post manager
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/post-manager', "App\Http\Controllers\PostManagerController@index")
    ->name('post-manager.index');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/post-manager/create', "App\Http\Controllers\PostManagerController@create")
    ->name('post-manager.create');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/post-manager/{post}', "App\Http\Controllers\PostManagerController@show")
    ->name('post-manager.show');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/post-manager/edit/{post}', "App\Http\Controllers\PostManagerController@edit")
    ->name('post-manager.edit');

Route::middleware(['auth:sanctum', 'verified'])
    ->post('/post-manager', "App\Http\Controllers\PostManagerController@store")
    ->name('post-manager.store');

Route::middleware(['auth:sanctum', 'verified'])
    ->put('/post-manager/{post}', "App\Http\Controllers\PostManagerController@update")
    ->name('post-manager.update');

Route::middleware(['auth:sanctum', 'verified'])
    ->delete('/post-manager/{post}', "App\Http\Controllers\PostManagerController@destroy")
    ->name('post-manager.destroy');

// Categories manager
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/categories-manager', "App\Http\Controllers\CategoriesManagerController@index")
    ->name('categories-manager.index');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/categories-manager/create', "App\Http\Controllers\CategoriesManagerController@create")
    ->name('categories-manager.create');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/categories-manager/{category}', "App\Http\Controllers\CategoriesManagerController@show")
    ->name('categories-manager.show');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/categories-manager/edit/{category}', "App\Http\Controllers\CategoriesManagerController@edit")
    ->name('categories-manager.edit');

Route::middleware(['auth:sanctum', 'verified'])
    ->post('/categories-manager', "App\Http\Controllers\CategoriesManagerController@store")
    ->name('categories-manager.store');

Route::middleware(['auth:sanctum', 'verified'])
    ->put('/categories-manager/{category}', "App\Http\Controllers\CategoriesManagerController@update")
    ->name('categories-manager.update');

Route::middleware(['auth:sanctum', 'verified'])
    ->delete('/categories-manager/{category}', "App\Http\Controllers\CategoriesManagerController@destroy")
    ->name('categories-manager.destroy');

Route::middleware(['auth:sanctum', 'verified'])
    ->post('/comment', "App\Http\Controllers\CommentController@store");


Route::get('/user-ip', "App\Http\Controllers\ClientDataController@index");

// Category browsing
Route::get('/category/{category}', 'App\Http\Controllers\HomeController@showCategory')
    ->name('category.index');

// Static pages
Route::get('/about-us', 'App\Http\Controllers\StaticPagesController@aboutUs');
Route::get('/privacy-policy', 'App\Http\Controllers\StaticPagesController@privacyPolicy');
Route::get('/terms-and-conditions', 'App\Http\Controllers\StaticPagesController@termsAndConditions');
Route::get('/contact-us', 'App\Http\Controllers\StaticPagesController@contactUs');

// Post landing page
Route::get('/{slug}', 'App\Http\Controllers\PostsController@index');






