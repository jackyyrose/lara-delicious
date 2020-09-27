<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // 1 review belongs to 1 user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
