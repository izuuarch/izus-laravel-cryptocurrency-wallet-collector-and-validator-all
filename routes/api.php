<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Collectioncontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// user login api routes
Route::prefix('wallet')->group(function(){
    // get requests for the authentication
    Route::get('/register', [Authcontroller::class,'register']);
    Route::get('/login', [Authcontroller::class,'login']);
    Route::get('/forgot', [Authcontroller::class,'forgot']);
    Route::get('/newpassword', [Authcontroller::class,'newpassword']);
    // post routes for authentication
    Route::post('/signup', [Authcontroller::class,'signup']);
    Route::group(['middleware' =>'auth:sanctum'],function () {
        // get routes for the collection
    Route::get('/create', [Collectioncontroller::class,'create']);
    Route::get('/viewall', [Collectioncontroller::class,'viewall']);
    Route::get('/view/{id}', [Collectioncontroller::class,'viewsinglecollection']);

    // post routes for the collection
    Route::post('/createcollection', [Collectioncontroller::class,'createcollection']);
});

});
