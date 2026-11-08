<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FilmSeeder extends Seeder
{
    public function run(): void
    {
        $films = [
            ['judul' => 'Dilan 1991', 'tahun' => 2019, 'genre' => 'Romantis', 'tanggal_rilis' => '2019-02-28', 'rating' => 6.5, 'poster' => 'dilan-1991.jpg',
             'sinopsis' => 'Melanjutkan kisah Dilan dan Milea di Bandung, ketika hubungan mereka diuji oleh konflik dan keadaan di sekitar mereka.'],
            ['judul' => 'Mencuri Raden Saleh', 'tahun' => 2022, 'genre' => 'Aksi', 'tanggal_rilis' => '2022-08-25', 'rating' => 7.0, 'poster' => 'mencari-raden-saleh.jpg',
             'sinopsis' => 'Sekelompok anak muda menyusun rencana berani untuk mencuri sebuah lukisan karya pelukis legendaris Raden Saleh, dengan risiko besar di sepanjang aksinya.'],
            ['judul' => 'Agensi Rumah Tangga', 'tahun' => 2026, 'genre' => 'Drama', 'tanggal_rilis' => '2026-09-10', 'rating' => 7.0, 'poster' => 'agensi-rumah-tangga.jpg',
             'sinopsis' => 'Katia kehilangan pekerjaan di startup akibat PHK, sementara cicilan rumah terus berjalan. Ia lalu membuka usaha penyaluran asisten rumah tangga dari rumahnya sendiri.'],
            ['judul' => 'Suanggi: Ilmu Kutukan', 'tahun' => 2026, 'genre' => 'Horor', 'tanggal_rilis' => '2026-09-10', 'rating' => 6.0, 'poster' => 'suanggi.jpg',
             'sinopsis' => 'Beni pulang ke kampung halamannya di Pulau Kladum bersama kekasihnya demi harta ibu angkatnya, namun ia justru diteror kekuatan gaib kiriman seorang Suanggi.'],
            ['judul' => 'Kuasa Gelap: Perjanjian Darah', 'tahun' => 2026, 'genre' => 'Horor', 'tanggal_rilis' => '2026-10-08', 'rating' => 6.5, 'poster' => 'kuasa-gelap.jpg',
             'sinopsis' => 'Romo Thomas dan Romo Rendra kembali berhadapan dengan kekuatan gelap yang terkait perjanjian pesugihan dan entitas kuno bernama Rephaim.'],
        ];

        foreach ($films as $data) {
            $category = Category::where('slug', Str::slug($data['genre']))->first();

            Film::firstOrCreate(
                ['judul' => $data['judul']],
                $data + ['category_id' => $category?->id]
            );
        }
    }
}