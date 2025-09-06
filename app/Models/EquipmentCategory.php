<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EquipmentCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'icon_svg',
    ];

    /**
     * Satu Kategori Peralatan memiliki BANYAK item.
     */
    public function items(): HasMany
    {
        return $this->hasMany(EquipmentItem::class);
    }
}