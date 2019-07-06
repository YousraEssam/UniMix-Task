<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'photo_name',
    ];
    
    public $timestamps = false;

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
