<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Mortar Ready to use',
                'special' => FALSE
            ],
            [
                'product_name' => 'Self-Compacting Concrete',
                'special' => TRUE
            ],
            [
                'product_name' => 'Early Strength Concrete',
                'special' => TRUE
            ],
            [
                'product_name' => 'Steel Fibers Concrete',
                'special' => FALSE
            ],
            [
                'product_name' => 'PolyProplene Fiber Concrete',
                'special' => FALSE
            ], 
            [
                'product_name' => 'Colored Concrete',
                'special' => TRUE
            ],
            [
                'product_name' => 'Heavy Weight Concrete',
                'special' => FALSE
            ],
            [
                'product_name' => 'Reactive Powder Concrete',
                'special' => FALSE
            ],
            [
                'product_name' => 'Durable Concrete',
                'special' => TRUE
            ],
            [
                'product_name' => 'Light Weight Concrete',
                'special' => TRUE
            ],
            [
                'product_name' => 'Ready Mortar Concrete',
                'special' => TRUE
            ],
        ]);
    }
}
