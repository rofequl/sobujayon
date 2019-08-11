<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class width extends Model
{
    public function product(){
        return $this->hasMany(product::class,'width_id');
    }
}
