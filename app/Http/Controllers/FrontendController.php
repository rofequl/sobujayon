<?php

namespace App\Http\Controllers;

use App\brand;
use App\product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $brand = brand::with(array('product' => function($query) {$query->where('status', 1);
        }))->where('status',1)->orderBy('id', 'DESC')->get();
        return view('frontend.index',compact('brand'));
    }

    public function shop(){
        $product = product::where('status',1)->paginate(15);
        return view('frontend.shop',compact('product'));
    }
}
