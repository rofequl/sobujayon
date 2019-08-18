<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    public function category(){
        return $this->belongsTo(category::class);
    }

    public function product(){
        return $this->hasMany(product::class,'subcategory_id');
    }

    public function brand(){
        return $this->hasMany(brand::class,'subcategory_id');
    }
}
