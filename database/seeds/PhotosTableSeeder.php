<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [
                'photo_name' => 'mortar.png',
                'logo' => FALSE,
                'product_id' => 1,
            ],
            [
                'photo_name' => 'mortar_logo.PNG',
                'logo' => TRUE,
                'product_id' => 1,
            ],
            [
                'photo_name' => 'self_compacting.png',
                'logo' => FALSE,
                'product_id' => 2,
            ],
            [
                'photo_name' => 'self_logo.PNG',
                'logo' => TRUE,
                'product_id' => 2,
            ],
            [
                'photo_name' => 'early_strength.png',
                'logo' => FALSE,
                'product_id' => 3,
            ], 
            [
                'photo_name' => 'early_logo.PNG',
                'logo' => TRUE,
                'product_id' => 3,
            ],
            [
                'photo_name' => 'steel_fibers.png',
                'logo' => FALSE,
                'product_id' => 4,
            ],
            [
                'photo_name' => 'steel_logo.PNG',
                'logo' => TRUE,
                'product_id' => 4,
            ],
            [
                'photo_name' => 'poly.PNG',
                'logo' => FALSE,
                'product_id' => 5,
            ],
            [
                'photo_name' => 'poly_logo.PNG',
                'logo' => TRUE,
                'product_id' => 5,
            ],
            [
                'photo_name' => 'colored.png',
                'logo' => FALSE,
                'product_id' => 6,
            ],
            [
                'photo_name' => 'uni_logo.PNG',
                'logo' => TRUE,
                'product_id' => 6,
            ],
            [
                'photo_name' => 'heavy_weight.png',
                'logo' => FALSE,
                'product_id' => 7,
            ],
            [
                'photo_name' => 'heavy_logo.PNG',
                'logo' => TRUE,
                'product_id' => 7,
            ],
            [
                'photo_name' => 'reactive_powder.png',
                'logo' => FALSE,
                'product_id' => 8,
            ],
            [
                'photo_name' => 'reactive_logo.PNG',
                'logo' => TRUE,
                'product_id' => 8,
            ],
        ]);
    }
}
