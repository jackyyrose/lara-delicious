<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_name',
        'description',
        'price',
        'is_active',
        'category_id'
    ];

    // 1 menu belongs to 1 category
    public function menuCategory(){
        return $this->belongsTo(MenuCategory::class);
    }

    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format($this->dateFormat ?: 'Y-m-d H:i:s');
    }
}
