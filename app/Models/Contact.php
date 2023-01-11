<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact__forms';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'solution',
        'message',
        'status',
    ];
}
