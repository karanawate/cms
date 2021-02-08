<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public $table = 'testimonials';

    public $fillable = [
        'title',
        'description',
        'category',
        'image',
        'thumbnail',
        'published_at'
    ];

    public $dates = [
        "created_at",
        "deleted_at",
        "updated_at"
    ];
}
