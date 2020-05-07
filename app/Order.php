<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'cart', 'payment_id', 'user_id'
    ];
    public function user(){
        $this->belongsTo('App\User');
    }
}
