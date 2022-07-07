<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Collectioncontroller;

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
    return view('welcome');
});

Route::prefix('wallet')->group(function(){
    // get requests for the authentication
    Route::get('/register', [Authcontroller::class,'register']);
    Route::get('/login', [Authcontroller::class,'login']);
    Route::get('/forgot', [Authcontroller::class,'forgot']);
    Route::get('/newpassword', [Authcontroller::class,'newpassword']);
    // post routes for authentication
    Route::post('/signup', [Authcontroller::class,'signup']);
    Route::post('/signin', [Authcontroller::class,'signin']);
    Route::post('/logout', [Authcontroller::class,'logout']);

});
Route::prefix('user')->middleware('isloggin')->group(function(){
        // get routes for the collection
        Route::get('/dashboard', [Collectioncontroller::class,'index']);
    Route::get('/create', [Collectioncontroller::class,'create']);
    Route::get('/viewall', [Collectioncontroller::class,'viewall']);
    Route::get('/view/{id}', [Collectioncontroller::class,'viewsinglecollection']);

    // post routes for the collection
    Route::post('/createcollection', [Collectioncontroller::class,'createcollection']);
});