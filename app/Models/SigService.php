<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SigService extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'icon_class',
    ];

    /**
     * Satu Jasa SIG memiliki BANYAK tingkatan tarif (berdasarkan skala).
     * Kita urutkan berdasarkan harga agar tampil teratur.
     */
    public function tiers(): HasMany
    {
        return $this->hasMany(SigTier::class)->orderBy('price', 'asc');
    }
}