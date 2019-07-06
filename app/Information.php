<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
        'prod_profile',
        'prod_benefits',
        'prod_applications',
        'product_id',
    ];
    
    public $timestamps = false;

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
    
    static function get_profiles(){
        $profile = Information::select('prod_profile')->get();

        foreach($profile as $prod_profile){
            $profiles[] = $prod_profile['prod_profile'];    
        }

        for($i=0; $i<count($profiles); $i++){
            $profile_arr[$i] = explode("$",$profiles[$i]);
        }
        
        return $profile_arr;
    }

    static function get_benefits(){
        $benefit = Information::select('prod_benefits')->get();

        foreach($benefit as $prod_benefit){
            $benefits[] = $prod_benefit['prod_benefits'];      
        }

        for($i=0; $i<count($benefits); $i++){
            $benefits_arr[$i] = explode("$",$benefits[$i]);
        }
    
        return $benefits_arr;
    }

    static function get_applications(){
        $application = Information::select('prod_applications')->get();

        foreach($application as $prod_app){
            $applications[] = $prod_app['prod_applications']; 
        }

        for($i=0; $i<count($applications); $i++){
            $app_arr[$i] = explode("$",$applications[$i]);
        }

        return $app_arr;
    }

}
