<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Contact_Forms;
use App\Http\Controllers\Contact_FormsController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Resources\Contact_FormsResource;

use App\Models\Message;
// use App\Http\Controllers\MessageController;
use App\Http\Resources\MessageResource;

use App\Models\Solution;
use App\Http\Resources\SolutionResource;

use App\Models\Gallery;
use App\Http\Resources\GalleryResource;


use App\Models\GalleryImage;
use App\Http\Resources\GalleryImageResource;

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



Route::get('contact__forms/', function() {
    return Contact_FormsResource::collection(Contact_Forms::all());
});

Route::get('/contact__forms/{id}', function($id) {
    return new Contact_FormsResource(Contact_Forms::findorFail($id));
});

Route::post('/contact__forms', [Contact_FormsController::class, 'store']);

Route::put('/contact__forms/{id}', [Contact_FormsController::class, 'update']);

Route::delete('/contact__forms/{id}', [Contact_FormsController::class, 'destroy']);



Route::get('message/', function() {
    return MessageResource::collection(Message::all());
});

Route::get('message/{id}', function($id) {
    return new MessageResource(Message::findOrFail($id));
});



Route::get('solution/', function(){
    return SolutionResource::collection(Solution::all());
});

Route::get('solution/{id}', function($id) {
    return new SolutionResource(Solution::findOrFail($id));
});



Route::get('gallery/', function(){
    return GalleryResource::collection(Gallery::all());
});

Route::get('gallery/{id}', function($id) {
    return new GalleryResource(Gallery::findOrFail($id));
});



// Route::get('galleryimages/', function(){
//     return GalleryImageResource::collection(Gallery::all());
// });


Route::get('galleryImages/', [GalleryImageController::class, 'galleryImages']);

Route::get('galleryImages/{gallery_id}', function($id) {
    return new GalleryResource(Gallery::findOrFail($id));
});

// [GalleryImageController::class, 'galleryImages']);






