<?php

namespace App\Models;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GalleryImage extends Model
{
    use HasFactory;

    protected $table = 'gallery_images';

    protected $fillable = [
        'id',
        // 'gallery_id',
        'image',
        // 'created_at'
    ];


    // public function gallery() {
    
    //     return $this->hasMany(Gallery::class, 'gallery_id', 'id');
    // }

}
