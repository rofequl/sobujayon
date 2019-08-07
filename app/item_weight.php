<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item_weight extends Model
{
    public function product(){
        return $this->hasMany(product::class,'item_weight_id');
    }
}
