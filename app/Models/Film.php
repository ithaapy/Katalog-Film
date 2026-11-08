<?php

// MODEL
// Bertugas mengatur dan mengambil data film dari database.
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;  

class Film extends Model
{
    // Memungkinkan Model menggunakan Factory untuk membuat data dummy/testing.
    use HasFactory;

    // Menentukan kolom data film yang boleh diisi secara massal.
    protected $fillable = [
        'judul',
        'tahun',
        'genre',
        'tanggal_rilis',
        'rating',
        'poster',
        'sinopsis',
        'category_id'
    ];

    // Mengatur tipe data dari kolom tertentu.
    // tanggal_rilis menjadi tipe tanggal dan rating menjadi angka desimal.
    protected $casts = [
        'tanggal_rilis' => 'date',
        'rating' => 'decimal:1',
    ];

        public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}