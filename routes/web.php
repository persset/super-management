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

Route::get("/", [MainController::class, "main"])->name("site.index");

Route::get("/about", [AboutController::class, "about"])->name("site.about");

Route::get("/contact", [ContactController::class, "contact"])->name(
    "site.contact"
);

Route::get("/login", function () {
    return "Login";
})->name("site.login");

Route::prefix("/app")->group(function () {
    Route::get("/clients", function () {
        return "Clients";
    })->name("app.clients");

    Route::get("/providers", function () {
        return "Providers";
    })->name("app.providers");

    Route::get("/products", function () {
        return "Products";
    })->name("app.products");
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
