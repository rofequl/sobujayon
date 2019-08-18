<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    public function subcategory(){
        return $this->belongsTo(subcategory::class);
    }
}
