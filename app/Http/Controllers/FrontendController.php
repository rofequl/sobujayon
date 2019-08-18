<?php

namespace App\Http\Controllers;

use App\brand;
use App\product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $brand = brand::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('frontend.index', compact('brand'));
    }

    public function shop()
    {
        $product = product::where('status', 1)->paginate(15);
        return view('frontend.shop', compact('product'));
    }

    public function SingleShop(Request $request)
    {
        if ($request->product) {
            $product = product::find($request->product);
            return view('frontend.single-shop', compact('product'));
        } else {
            abort('404');
        }
    }

    public function AddCart(Request $request)
    {
        $qty = $request->qty;
        if ($qty == 'NaN' || $qty == 0){
            $qty = 1;
        }
        $data = product::find($request->id);
        $cart = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->id;
        });
        $price = $qty * ($data->price - $data->discount);
        if ($cart->isNotEmpty()){
            $rowId = $cart->keys();
            $rowId = $rowId[0];
            if ($cart[$rowId]->qty == $qty){
                return 1;
            }else{
                Cart::update($rowId, $qty);
                return 2;
            }
        }else{
            Cart::add($data->id, $data->name->name, $qty,$price);
            return 3;
        }


    }

    public function TotalCost(Request $request)
    {
        $qty = $request->qty;
        if ($qty == 'NaN' || $qty == 0){
            $qty = 1;
        }
        $lift = $request->lift;
        if ($lift == 'NaN' || $lift == 0){
            $lift = 1;
        }

        $product = product::find($request->id);

        dd($request->all());
    }
}
