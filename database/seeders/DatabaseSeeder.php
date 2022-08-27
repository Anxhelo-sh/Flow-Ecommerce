<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(1)->create();
        $categories=Category::factory(4)->create();
        $categories->each(function ($category){
            $product=Product::factory(1)->create(['category_id' => $category->id]);
            $product1=$product->first();
            $product1->categories()->attach($category->id);

        });

    }
}
