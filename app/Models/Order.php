<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //Order belongs to an user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //To many orders belongs to many products
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot('quantity');
        //Adding manually 'quantity' column of the 'order_products' pivot table
    }
}
