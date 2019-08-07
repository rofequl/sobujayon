<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipping_weight extends Model
{
    public function product(){
        return $this->hasMany(product::class,'shipping_weight_id');
    }
}
