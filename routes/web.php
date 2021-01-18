<?php

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

// Route::get('/', function () {
//     $data = ['name' => 'James', 
//              "colors"=>["blue","red","green"]
//             ];
//     return view('welcome', $data );
// });

use App\Http\Controllers\PlaysController;

Route::get("/", [PlaysController::class,'index']);
Route::post("/store",[PlaysController::class,"store"]);
Route::get("/side",function(){
    return View("sidebar");
});
Route::get("/tail",function(){
    return View("tailwind");
});