<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Orders(){
        return $this->hasMany('App\Models\Order');
    }
    use HasFactory;
}
