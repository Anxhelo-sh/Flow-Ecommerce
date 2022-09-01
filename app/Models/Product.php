<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'category_id',
        'name',
        'color',
        'photo',
        'price',
        'short_description',
        'long_description',
        'available',
        'quantity',
    ];

    public function order(User $user)
    {
        $this->orders()->create([
            'user_id' => $user->id,
            'ordered_at' => now(),
            'canceled_at' => null,
        ]);
    }

    public function cancelOrder(User $user)
    {
        $order = $this->orders()
            ->where('user_id', $user->id)
            ->whereNotNull('ordered_at')
            ->whereNull('canceled_at')
            ->first();

            $order->update([
            'canceled_at' => now(),
        ]);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id')->withPivot('category_id')->withTimestamps();
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
