<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    public function galleryImages() {
     
        $images = GalleryImage::orderby('id', 'ASC')->get(); 
        
        return response()->json($images);
    }

    public function show($gallery_id) {
    
        return GalleryImage::find($gallery_id);
        // return GalleryImage::findOrFail($images);
    }

}
