<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    // up() dijalankan saat migrate. Isinya perintah membuat tabel films.
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->unsignedSmallInteger('tahun');
            $table->string('genre');
            $table->date('tanggal_rilis');
            $table->decimal('rating', 3, 1);
            $table->string('poster');
            $table->text('sinopsis');
            $table->timestamps();

        });
    }
    /*Bagian MVC: migration bukan M, V, atau C. Ia pendukung Model, yaitu cetak biru struktur tabel database.
    
    fungsi kode: 
    'id()' membuat kolom id yang bertambah otomatis. timestamps() membuat created_at dan updated_at. Dua hal ini sama seperti di posts pada contoh Anda.
    'string' untuk teks pendek, text untuk teks panjang (sinopsis), unsignedSmallInteger untuk angka tahun, dan decimal('rating', 3, 1) untuk angka seperti 7.8.
    'date('tanggal_rilis')' menyimpan tanggal sebagai 2008-09-25. Di tahap View nanti kita ubah tampilannya menjadi “25 September 2008”.
    'down()' dipakai untuk membatalkan (dropIfExists). Biarkan apa adanya.

    Hubungan: kolom di migration harus sama dengan kunci array di Film-lama.txt: judul, tahun, genre, tanggal_rilis, rating, poster, sinopsis. Nama kolom ini nanti dipakai Model, Factory, Seeder, dan View.
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
