<?php

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

require __DIR__ . "/v1/v1.php";
require __DIR__ . "/v2/v2.php";


Route::get('/fetch/{folder?}/{file?}',function ($file_name=null, $folder = null)
{
    if(!$file_name) return '';
    return get_disk_file($folder,$file_name,);
})->name('fetch.photo');
