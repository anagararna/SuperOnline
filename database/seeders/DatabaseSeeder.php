<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run()
    {
        $this->call(Categories::class);
        $this->call(SubCategories::class);
        $this->call(Products::class);
    }
}