<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'name',
        'data',
        'label',
        'data_type',
        'group_name',
    ];
    public $timestamps = false;
    // protected $dates = false;
}
