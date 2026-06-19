<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\StartSession;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return redirect('/' . config('app.location_short_code'));
// });

Route::fallback(function (Request $request) {
    if ($request->segment(1) !== 'sa') {
        return redirect('/');
    }

    abort(404); // If "sa" but not found
});
Route::view('/', 'landing');

Route::group(['prefix' => 'sa'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'ourStory'])->name('our-story');
    Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/works', [HomeController::class, 'gallery'])->name('works');
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blog/{slug}', [BlogController::class, 'blogDetail'])->name('blogs.detail');
    Route::get('/application', [ApplicationController::class, 'index'])->name('applications.index');
    Route::get('/application/{slug}', [ApplicationController::class, 'applicationDetail'])->name('applications.detail');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/category/{slug}', [ProductController::class, 'category'])->name('products.category');
    Route::get('/product/{slug}', [ProductController::class, 'productDetail'])->name('products.detail');
    Route::get('/product/{slug}', [ProductController::class, 'productDetail'])->name('products.detail');
    Route::post('contact-mail', [HomeController::class, 'contactMail'])->name('contact-mail');
    Route::post('express-interest', [ProductController::class, 'expressInterest'])->name('express-interest');
    
  
    // Route::get('sitemap.xml',  [HomeController::class, 'sitemap']);

      Route::get('sitemap.xml', [HomeController::class, 'sitemap'])
        ->withoutMiddleware([
            StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class
        ])
        ->name('sitemap.xml');
     
      Route::get('robots.txt', [HomeController::class, 'robots'])
     ->name('robots.txt');
     
});




Route::get('/clear-cache', function () {

    Artisan::call('optimize:clear');

    return "All Cache is cleared";

    // return view('cache');

})->name('cache.clear');
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return "Image link makes public";
})->name('storage.link');
