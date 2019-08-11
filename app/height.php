<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class height extends Model
{
    public function product(){
        return $this->hasMany(product::class,'height_id');
    }
}
