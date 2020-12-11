<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'rating', 'restaurant_id'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
