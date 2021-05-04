<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
             'type' => '',
             'type' => '',
             'type' => '',
             'type' => '',
             'type' => '',
             'type' => '',
             'type' => '',
             'type' => '',
             'type' => '',
        ]);
    }
}
