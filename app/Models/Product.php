<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'is_product',
        'is_material',
        'price',
        'high_price',
        'image',
        'active',
        'category_id',
        'unit_id',
        ];
    
    public function categories() 
    {
        return $this->belongsToMany(Category::class);
    }
    
    public function units() 
    {
        return $this->belongsToMany(Unit::class);
    }
}
