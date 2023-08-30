<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //protected $primaryKey  = 'product_id';

    protected $fillable = ['product_picture','name','availability','price','id','category_id','admin_id'];

    public $timestamps = false;

    function category(){
        return $this->belongsTo(Category::class);
    }

    function orders() {
        return $this->belongsToMany(Order::class, 'order_product', 'product_id', 'order_id');
    }
}
