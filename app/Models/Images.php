<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'image',
        'item_id'
    ];

    public $timestamps = false;

    public function item()
    {
        return $this->belongsTo('App\Models\Items', 'item_id');
    }
}
