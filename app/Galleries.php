<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Galleries extends Model
{
    protected $table = 'galleries';

    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'thumbnail'
    ];
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at'
    ];

    public function getDescriptionAttribute($value)
    {
        return ucfirst($value);
    }

    public function setTitleAttribute($value)
    {
        return $this->attributes['title'] = ucfirst($value);
    }
    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
}
