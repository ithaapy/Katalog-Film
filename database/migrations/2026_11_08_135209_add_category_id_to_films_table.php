<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('films', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->constrained(
                table: 'categories',
                indexName: 'films_category_id'
            );
        });

        // Mengisi category_id dari kolom genre yang SUDAH ADA (kolom genre tidak diubah).
        foreach (DB::table('films')->get() as $film) {
            $nama = trim(explode(',', $film->genre)[0]);
            $slug = Str::slug($nama);

            $category = DB::table('categories')->where('slug', $slug)->first();

            $id = $category
                ? $category->id
                : DB::table('categories')->insertGetId([
                    'name' => $nama,
                    'slug' => $slug,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

            DB::table('films')->where('id', $film->id)->update(['category_id' => $id]);
        }
    }

    public function down(): void
    {
        Schema::table('films', function (Blueprint $table) {
            $table->dropConstrainedForeignId('category_id');
        });
    }
};