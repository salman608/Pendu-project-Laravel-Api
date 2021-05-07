<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // ProductCategory
        \DB::table('product_categories')->truncate();
        $product_categories = collect(['Electronics','Grocery', 'Cloths', 'Foods']);
    
        $product_categories->each(function($product_category){
            \DB::table('product_categories')->insert([
                'title' => $product_category,
                'slug' => Str::slug($product_category)
            ]);
        });
    }
}
