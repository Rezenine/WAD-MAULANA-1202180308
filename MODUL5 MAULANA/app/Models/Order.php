<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
    use HasFactory;
}
