<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class temperature extends Model
{
    public function product(){
        return $this->hasMany(product::class,'temperature_id');
    }
}
