<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;
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
        Artisan::call('storage:link');
        return "ok";
    });
    Route::get('/clear', function () {
        Artisan::call('optimize');
        return "ok";
    });

    Route::get("/dashboard", [AdminController::class, "dashboard"]);

    Route::prefix("/articles")->group(function () {
        Route::delete("/gallery_single_delete",[ArticleController::class,"article_gallery_delete"]);
        Route::post("/gallery_selected_delete",[ArticleController::class,"selected_gallery_delete"]);
        Route::get("/", [ArticleController::class, "index"]);
        Route::get("/create", [ArticleController::class, "create"]);
        Route::post("/", [ArticleController::class, "store"]);
        Route::get("/{id}/edit", [ArticleController::class, "edit"]);
        Route::put("/{id}", [ArticleController::class, "update"]);
        Route::delete("/", [ArticleController::class, "delete"]);
    });

    Route::prefix("/services")->group(function () {
        Route::delete("/gallery_single_delete",[ServiceController::class,"service_gallery_delete"]);
        Route::post("/gallery_selected_delete",[ServiceController::class,"selected_gallery_delete"]);
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
        Route::get("/sortable",[SliderController::class,"sortable"]);
    });

    Route::prefix("/gallery")->group(function () {
        Route::post("/gallery_selected_delete",[GalleryController::class,"selected_gallery_delete"]);
        Route::get("/", [GalleryController::class, "index"]);
        Route::post("/", [GalleryController::class, "store"]);
        Route::delete("/", [GalleryController::class, "delete"]);
    });

    Route::prefix("/settings")->group(function (){
        Route::get("/",[SettingController::class,"get"]);
        Route::post("/",[SettingController::class,"set"]);
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
    Route::view("/maintenance","maintenance");
});

