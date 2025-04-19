<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get("/", [ContactController::class, "index"]);
Route::get("/confirm", [ContactController::class, "confirm"]);
Route::get("/thanks", [ContactController::class, "thanks"]);

Route::get("/register", function()
{
    return view("auth.register");
});

Route::get("/login", function()
{
    return view("auth.login");
});

Route::get("/admin", function()
{
    return view("admin.index");
});