<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            FilmSeeder::class,
        ]);

        // Demo factory (aktifkan saat dicoba, lalu matikan lagi):
        // \App\Models\Film::factory(10)->recycle(\App\Models\Category::all())->create();
    }
}