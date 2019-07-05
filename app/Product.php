<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'special',
    ];

    public $timestamps = false;

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function information()
    {
        return $this->hasMany('App\Information');
    }

    static function get_special_products(){
        $special_products = Product::select('product_name')->where('special','1')->get();
        foreach($special_products as $special){
            $specials[] = $special['product_name'];
        }
        return $specials;
    }

}
