<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LabItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lab_category_id',
        'name',
        'aliases',
        'price',
        'notes',
    ];

    /**
     * Mendefinisikan relasi: Satu item laboratorium DIMILIKI OLEH satu kategori.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(LabCategory::class, 'lab_category_id');
    }
}