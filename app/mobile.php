<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobile extends Model
{
    protected $table = 'mobiles';

    protected $fillable =[
        'number',
        'user_id'
    ];
    protected $dates =[
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
