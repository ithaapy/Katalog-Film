<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function films(): HasMany
    {
        return $this->hasMany(Film::class);
    }
    // /** @use HasFactory<\Database\Factories\CategoryFactory> */
    // use HasFactory;
}
