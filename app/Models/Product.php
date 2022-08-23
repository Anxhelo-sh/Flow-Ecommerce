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
        'category',
        'name' ,
        'color' ,
        'photo' ,
        'price' ,
        'short_description' ,
        'long_description' ,
        'available' ,
        'quantity' ,
    ];

}
