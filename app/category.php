<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function subcategory(){
        return $this->hasMany(subcategory::class,'category_id');
    }

    public function product(){
        return $this->hasMany(product::class,'category_id');
    }
}
