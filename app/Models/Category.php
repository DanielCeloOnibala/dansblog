<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug'];
    protected $table = 'category';

    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
