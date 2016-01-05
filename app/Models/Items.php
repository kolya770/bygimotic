<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'category',
        'title-meta',
        'description-meta',
        'keywords-meta'
    ];

    public function image()
    {
        return $this->hasMany('App\Models\Images', 'item_id');
    }

}
