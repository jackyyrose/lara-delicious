<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuCategory;

class MenuCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MenuCategory::insert(['category_name'=> 'YUMCHA']);
        MenuCategory::insert(['category_name'=> 'SEAFOOD']);
        MenuCategory::insert(['category_name'=> 'BEEF']);
        MenuCategory::insert(['category_name'=> 'CHICKEN']);
        MenuCategory::insert(['category_name'=> 'PORK']);
        MenuCategory::insert(['category_name'=> 'DUCK']);
        MenuCategory::insert(['category_name'=> 'LAMB']);
        MenuCategory::insert(['category_name'=> 'SOUP']);
        MenuCategory::insert(['category_name'=> 'VEGETABLES']);
        MenuCategory::insert(['category_name'=> 'DESSERT']);



    }
}
