<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'photo_name',
        'logo',
        'product_id',
    ];
    
    public $timestamps = false;

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
