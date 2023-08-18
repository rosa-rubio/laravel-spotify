<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist',
        'title',
        'album',
        'image',
        'date',
        'duration',

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getAll() {
        
    }
}
