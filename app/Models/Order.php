<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','price'];

    public $timestamps = false;

    function user(){
        return $this->belongsTo(User::class);
    }

    function order_items() {
        return $this->hasMany(OrderItem::class);
    }
}
