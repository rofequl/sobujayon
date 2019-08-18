<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function category(){
        return $this->belongsTo(category::class);
    }

    public function name(){
        return $this->belongsTo(name::class);
    }

    public function subcategory(){
        return $this->belongsTo(subcategory::class);
    }

    public function origin_country(){
        return $this->belongsTo(origin_country::class);
    }

    public function age(){
        return $this->belongsTo(age::class);
    }

    public function item_weight(){
        return $this->belongsTo(item_weight::class);
    }

    public function width(){
        return $this->belongsTo(width::class);
    }

    public function temperature(){
        return $this->belongsTo(temperature::class);
    }

    public function height(){
        return $this->belongsTo(height::class);
    }


}
