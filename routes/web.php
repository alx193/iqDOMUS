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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () { 

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    


    Route::controller(App\Http\Controllers\Admin\MessageController::class)->group(function (){
        Route::get('/message', 'index');
        Route::get('/message/create', 'create');
        Route::post('/message', 'store');
        Route::get('/message/{message}/edit', 'edit');
        Route::put('/message/{message}','update');
        Route::get('/message/{message_id}/delete', 'destroy');
    });


    Route::controller(App\Http\Controllers\Admin\SolutionController::class)->group(function (){
        Route::get('/solution', 'index');
        Route::get('/solution/create', 'create');
        Route::post('/solution', 'store');
        Route::get('/solution/{solution}/edit', 'edit');
        Route::put('/solution/{solution}','update');
        Route::get('/solution/{solution_id}/delete', 'destroy');
    });

    
    Route::controller(App\Http\Controllers\Admin\GalleryController::class)->group(function (){
        Route::get('/gallery', 'index');
        Route::get('/gallery/create', 'create');
        Route::post('/gallery', 'store');
        Route::get('/gallery/{gallery}/edit', 'edit');
        Route::put('/gallery/{gallery}','update');
        Route::get('/gallery/{gallery_id}/delete', 'destroy');
        Route::get('gallery-image/{gallery_image_id}/delete','destroyImage');
    });


    Route::controller(App\Http\Controllers\Admin\ContactController::class)->group(function (){
        Route::get('/contact', 'index');
        Route::get('/contact/create', 'create');
        Route::post('/contact', 'store');
        Route::get('/contact/{contact}/edit', 'edit');
        Route::put('/contact/{contact}','update');
        Route::get('/contact/{contact_id}/delete', 'destroy');
        
    });
});