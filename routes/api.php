<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// get all read books
Route::get('/reads', "ReadBooks@index");

// get all pending reads
Route::get('/pendingReads', "PendingReads@index");

// get all pending reads
Route::post('/addBooks', "AddBooks@index");

// update a book status
Route::post('/updateBookStatus', "UpdateBook@index");