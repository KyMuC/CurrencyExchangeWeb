<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('products')->truncate();
        DB::table('categories')->truncate();
        
        
        Category::create([
            'name' => 'автомобили',
        ]);
        
        Category::create([
            'name' => 'мотоциклы',
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'BMW x5',
            'description' => 'автомобиль премиум-класса'
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Skoda Octavia',
            'description' => 'автомобиль бизнес-класса'
        ]);        
        
        Product::create([
            'category_id' => '2',
            'name' => 'Harley Davidson',
            'description' => 'мотоцикл премиум-класса'
        ]);
    }
}
