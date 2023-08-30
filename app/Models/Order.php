<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    function user(){
        return $this->belongsTo(User::class);
    }

    function products() {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id');
    }

}
