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
        Category::create([
            'name' => 'Poductos Frescos',
        ]);

        Category::create([
            'name' => 'Despensa',
        ]);

        Category::create([
            'name' => 'Cuidado Personal',
        ]);

        Category::create([
            'name' => 'Lácteos y huevos',
        ]);

        Category::create([
            'name' => 'Droguería y limpieza',
        ]);

    

    }
}
