<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'code',
        'name',
        'description',
        'image',
        'price',
        'category',
        'inventoryStatus',
        'quality',
        'rating'
    ];
}
