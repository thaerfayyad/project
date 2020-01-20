<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'spring ',
            'description' => ' this is 1 category.',

        ]);
        DB::table('products')->insert([
            'name' => 'fashions ',
            'description' => 'cool blue clothing .',
            'feature' => 'public/images/products/fashion.jpg',
            'categories_id'=>1,
            'price' => 983.00
        ]);
    }
}
