<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = ['judul', 'category_id', 'content', 'gambar', 'slug', 'user_id', 'featured'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tags');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
