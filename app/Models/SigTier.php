<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SigTier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sig_service_id',
        'scale',
        'price',
    ];

    /**
     * Satu tingkatan tarif DIMILIKI OLEH satu Jasa SIG.
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(SigService::class, 'sig_service_id');
    }
}