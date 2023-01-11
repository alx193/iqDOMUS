<?php

namespace App\Models;

use App\Models\Solution;
use App\Models\GalleryImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';

    protected $fillable = [
        'solution_id',
        'name',
        'description',
        'status',
        'image',
    ];

    public function solution() {
    
        return $this->belongsTo(Solution::class, 'solution_id', 'id');
    }

    //protected $with = ['gallery_images'];

    public function galleryImages() {
    
        return $this->hasMany(GalleryImage::class, 'gallery_id', 'id');
    }

    public function galleryImage() {
    
        return $this->belongsTo(GalleryImage::class, 'gallery_id', 'id', 'image');
    }
}
