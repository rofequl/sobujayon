<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class name extends Model
{
    public function product(){
        return $this->hasMany(product::class,'name_id');
    }
}
