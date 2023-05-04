<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


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

Route::get('/', function () {
    return view('blog');
});
/*Route::get('/BlogSite', function () {
    return view('blog');
})->name('BlogSite');*/
Route::get('/BlogSite',[homeController::class,'BlogSite'])->name('BlogSite');
Route::get('/',[homeController::class,'index']);
Route::get('details',[homeController::class,'details']);
///////home actions
Route::get('showDetails/{id}',[homeController::class,'showDetails']);
///////comments 
/////Admin Pages
Route::get('index',[adminController::class,'index']);
Route::get('postControl',[adminController::class,'postControl']);
Route::get('commentControl',[adminController::class,'commentControl']);
Route::get('userControl',[adminController::class,'userControl']);
Route::get('deleteuser/{id}',[adminController::class,'deleteuser']);
//////posts actions
Route::post('/uploadpost',[AdminController::class,'uploadpost'])->name('uploadpost');
Route::get('/deletepost/{id}',[AdminController::class,'deletepost']);
Route::get('/updatepost/{id}',[AdminController::class,'updatepost']);
Route::get('/postsmenu',[AdminController::class,'postsmenu'])->name('postsmenu');
Route::post('/updatepostdata/{id}',[AdminController::class,'updatepostdata']);
///////
Route::post('yourcomment/{id}',[homeController::class,'yourcomment']);
Route::get('/deletecomment/{id}',[AdminController::class,'deletecomment']);








/////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
