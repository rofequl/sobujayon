<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class age extends Model
{
    public function product(){
        return $this->hasMany(product::class,'age_id');
    }
}
