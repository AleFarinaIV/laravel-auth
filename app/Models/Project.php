<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'start_date', 
        'end_date', 
        'stack',
        'status',
        'image_path',
        'slug'
    ];

    public static function generateSlug($name) {
        return Str::slug($name, '-');
    }
}
