<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products' ;

    protected $primaryKey = 'id' ;

    protected $fillable = [
        'category_id',
        'name' ,
        'color' ,
        'photo' ,
        'price' ,
        'short_description' ,
        'long_description' ,
        'available' ,
        'quantity' ,
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id')->withPivot('category_id')->withTimestamps();
    }

}
