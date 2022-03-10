<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AccessLogMiddleware;


use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;

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

Route::get("/", [MainController::class, "main"])
    ->name("site.index");

Route::get("/about", [AboutController::class, "about"])
    ->name("site.about");

Route::get("/contact", [ContactController::class, "contact"])
    ->name("site.contact");

Route::post("/contact", [ContactController::class, "saveContact"])
    ->name("site.contact");

Route::get("/login/{error?}", [LoginController::class, "index"])
    ->name("site.login");

Route::post("/login", [LoginController::class, "login"])
    ->name("site.login");

Route::middleware('auth.md:ungabunga')->prefix("/app")->group(function () {
    Route::get("/home", [HomeController::class, 'index'])->name("app.home");

    Route::get("/logout", [LoginController::class, 'logout'])->name("app.logout");

    Route::get("/client", [ClientController::class, 'index'])->name("app.client");

    Route::get("/provider", [ProviderController::class, "index"])->name("app.provider");
    Route::post("/provider/list", [ProviderController::class, "list"])->name("app.provider.list");
    Route::get("/provider/create", [ProviderController::class, "create"])->name("app.provider.create");
    Route::post("/provider/create", [ProviderController::class, "create"])->name("app.provider.create");
    

    Route::get("/product", [ProductController::class, "index"])->name("app.product");
});

Route::get("/teste", function () {
    echo "Rota 1";
})->name("site.teste");

Route::get("/teste2", function () {
    return redirect()->route("site.teste");
})->name("site.teste2");

Route::fallback(function () {
    echo "A rota acessada não foi encontrada.<a href='/'>Clique aqui para voltar ao inicio</a>";
});
