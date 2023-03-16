<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::firstOrCreate([
            'name' => 'Poductos Frescos',
        ]);

        Category::firstOrCreate([
            'name' => 'Despensa',
        ]);

        Category::firstOrCreate([
            'name' => 'Cuidado Personal',
        ]);

        Category::firstOrCreate([
            'name' => 'Lácteos y huevos',
        ]);

        Category::firstOrCreate([
            'name' => 'Droguería y limpieza',
        ]);

    

    }
}
