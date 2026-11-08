<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends Factory<Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $tanggal = fake()->dateTimeBetween('-25 years', 'now');

        return [
            'judul' => ucwords(fake()->words(3, true)),
            'tahun' => $tanggal->format('Y'),
            'category_id' => Category::factory(),
            'genre' => fake()->randomElement(['Drama', 'Horor', 'Romantis', 'Aksi', 'Komedi']),
            'tanggal_rilis' => $tanggal->format('Y-m-d'),
            'rating' => fake()->randomFloat(1, 5, 9),
            'poster' => fake()->randomElement([
            'dilan-1991.jpg', 'mencari-raden-saleh.jpg', 'agensi-rumah-tangga.jpg',
            'suanggi.jpg', 'kuasa-gelap.jpg',
            ]),
            // Data tambahan film
            'sutradara' => fake()->name(),
            'produser' => fake()->name(),
            'pemeran_utama' => fake()->name(),
            'sinopsis' => fake()->paragraph(15),
        ];
    }
}
