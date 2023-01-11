<?php

namespace App\Models;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Solution extends Model
{
    use HasFactory;

    protected $table ='solutions';

    protected $fillable = [
        'name',
        'description',
        'image',
        'b1',
        'b2',
        'b3',
        'b4',
        'b5',
        'b6',
        'b7',
        'b8',
        'b9',
        'b10',
        'b11',
        'b12',
        'b13',
        'status',
    ];

    public function galleries() {
    
        return $this->hasMany(Gallery::class, 'solution_id', 'id');
    }
}



