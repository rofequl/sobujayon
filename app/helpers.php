<?php

use App\brand;
use App\product;

function get_brand_by_id($id){
    return brand::find($id);
}

function get_product_by_brand($id){
    return product::whereRaw("find_in_set($id,brand_id)")->get();
}
