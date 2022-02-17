<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
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

Route::get("/", [MainController::class, "main"]);

Route::get("/about", [AboutController::class, "about"]);

Route::get("/contact", [ContactController::class, "contact"]);

Route::get("/login", function () {
    return "Login";
});

Route::prefix("/app")->group(function () {
    Route::get("/clients", function () {
        return "Clients";
    });

    Route::get("/providers", function () {
        return "Providers";
    });

    Route::get("/products", function () {
        return "Products";
    });
});
