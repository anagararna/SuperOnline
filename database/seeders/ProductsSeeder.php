<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        // Crea 50 productos falsos
        for ($i = 0; $i < 100; $i++) {
            Product::firstOrCreate([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(100, 1000),
                'photo' => $faker->imageUrl(640, 480, 'food'),
                'subcategory_id' => $faker->numberBetween(68, 80)
            ]);  
        } 
        for ($i = 0; $i < 40; $i++) {
            Product::firstOrCreate([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(100, 1000),
                'photo' => $faker->imageUrl(640, 480, $faker->randomElement(['milk', 'eggs', 'yogurt'])),
                'subcategory_id' => $faker->numberBetween(67, 69)
            ]);  
        }  
        for ($i = 0; $i < 40; $i++) {
            Product::firstOrCreate([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(100, 1000),
                'photo' => $faker->imageUrl(640, 480, $faker->randomElement(['cleaning products', 'air fresheners', 'detergents'])),
                'subcategory_id' => $faker->numberBetween(70, 72)
            ]);  
        } 
        for ($i = 0; $i < 30; $i++) {
            Product::firstOrCreate([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(100, 1000),
                'photo' => $faker->imageUrl(640, 480, $faker->randomElement(['fruits', 'vegetables'])),
                'subcategory_id' => $faker->numberBetween(73, 74)
            ]);  
        } 
        for ($i = 0; $i < 30; $i++) {
            Product::firstOrCreate([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(100, 1000),
                'photo' => $faker->imageUrl(640, 480, $faker->randomElement(['snacks', 'nuts', 'chips'])),
                'subcategory_id' => 75
            ]);  
        } 
        for ($i = 0; $i < 30; $i++) {
            Product::firstOrCreate([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(100, 1000),
                'photo' => $faker->imageUrl(640, 480, $faker->randomElement(['canned foods', 'oils', 'condiments'])),
                'subcategory_id' => 76
            ]);  
        }
        for ($i = 0; $i < 30; $i++) {
            Product::firstOrCreate([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(100, 1000),
                'photo' => $faker->imageUrl(640, 480, $faker->randomElement(['pasta', 'rice', 'legumes'])),
                'subcategory_id' => 77 
            ]);  
        }
        for ($i = 0; $i < 40; $i++) {
            Product::firstOrCreate([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(100, 1000),
                'photo' => $faker->imageUrl(640, 480, $faker->randomElement(['perfumes', 'shampoos', 'body care'])),
                'subcategory_id' => $faker->numberBetween(78, 80)
            ]);  
        }
    }
}
