<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\is_admin;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get("/admin/login", [HomeController::class, "login"]);
Route::post("/admin/login", [AdminController::class, "login_post"]);
Route::prefix("/admin")->middleware(["is_admin"])->group(function () {

    Route::get('/link', function () {
        artisan::call('storage:link');
        return "ok";
    });
    Route::get('/link', function () {
        artisan::call('optimize');
        return "ok";
    });

    Route::get("/dashboard", [AdminController::class, "dashboard"]);

    Route::prefix("/articles")->group(function () {
        Route::get("/", [ArticleController::class, "index"]);
        Route::get("/create", [ArticleController::class, "create"]);
        Route::post("/", [ArticleController::class, "store"]);
        Route::get("/{id}/edit", [ArticleController::class, "edit"]);
        Route::put("/{id}", [ArticleController::class, "update"]);
        Route::delete("/", [ArticleController::class, "delete"]);
    });

    Route::prefix("/services")->group(function () {
        Route::get("/", [ServiceController::class, "index"]);
        Route::get("/create", [ServiceController::class, "create"]);
        Route::post("/", [ServiceController::class, "store"]);
        Route::get("/{id}/edit", [ServiceController::class, "edit"]);
        Route::put("/{id}", [ServiceController::class, "update"]);
        Route::delete("/", [ServiceController::class, "delete"]);
    });

    Route::prefix("/sliders")->group(function () {
        Route::get("/", [SliderController::class, "index"]);
        Route::post("/", [SliderController::class, "store"]);
        Route::delete("/", [SliderController::class, "delete"]);
    });

    Route::prefix("/gallery")->group(function () {
        Route::get("/", [GalleryController::class, "index"]);
        Route::post("/", [GalleryController::class, "store"]);
        Route::delete("/", [GalleryController::class, "delete"]);
    });

    Route::get("/about", [AdminController::class, "about_detail"]);
    Route::post("/about", [AdminController::class, "about_set"]);
    Route::post("/logout", [AdminController::class, "logout"]);
});


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

Route::redirect("/", "/en");


Route::group(["middleware" => "language", "prefix" => "{language}"], function () {
    Route::get("/", [HomeController::class, "home"]);
    Route::post("/search", [HomeController::class, "search"]);
    Route::get("/services", [HomeController::class, "services"]);
    Route::get("/services/{slug}/{id}", [HomeController::class, "services_detail"]);
    Route::get("/blog", [HomeController::class, "blog"]);
    Route::get("/blog/{slug}/{id}", [HomeController::class, "blog_detail"]);
    Route::get("/gallery", [HomeController::class, "gallery"]);
    Route::get("/references", [HomeController::class, "references"]);
    Route::get("/contact", [HomeController::class, "contact"]);
    Route::get("/corporate", [HomeController::class, "corporate"]);
    Route::get("/terms", [HomeController::class, "terms"]);
});

