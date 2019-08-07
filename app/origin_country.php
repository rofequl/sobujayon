<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class origin_country extends Model
{
    public function product(){
        return $this->hasMany(product::class,'origin_country_id');
    }
}
