<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategory;
use App\Models\Category;


class SubCategories extends Seeder

{
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            if ($category->name === 'Poductos Frescos') {
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Frutas',
                ]);
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Verduras',
                ]);
                // Puedes seguir agregando más subcategorías
            }
            elseif ($category->name === 'Despensa') {
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Aperitivos y frutos secos',
                ]);
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Conservas, aceites y condimentos',
                ]);
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Pasta, arroz y legumbres',
                ]);
            }
            elseif ($category->name === 'Cuidado personal') {
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Cuidado del cabello',
                ]);
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Cuidado corporal',
                ]);
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Desodorante',
                ]);
            }
            elseif ($category->name === 'Lácteos y huevos') {
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Leche',
                ]);
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Huevos',
                ]);
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Yogures',
                ]);
            } 
            elseif ($category->name === 'Droguería y limpieza') {
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Cuidado ropa',
                ]);
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Limpieza hogar',
                ]);
                Subcategory::create([
                    'category_id' => $category->id,
                    'name' => 'Ambientadores',
                ]);
            }    
        }    
    }    
    
}