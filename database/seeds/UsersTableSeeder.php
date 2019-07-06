<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$ViYDc4.3o/mNU3zfecVEJez6vjs.RfXuJIvCSNViH.aSNwudW.9SC',
        ]);
    }
}
