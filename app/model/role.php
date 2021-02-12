<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public $table = 'roles';

    public $fillable = [
        'label',
        'names',
        'description'
    ];

}
