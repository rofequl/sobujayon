<?php

namespace App\Http\Controllers;

use App\age;
use App\brand;
use App\category;
use App\item_weight;
use App\name;
use App\origin_country;
use App\product;
use App\shipping_weight;
use App\subcategory;
use Illuminate\Http\Request;

use Session;

class NurseryController extends Controller
{
    public function NurseryProduct()
    {
        $category = category::all();
        $subcategory = subcategory::all();
        $name = name::all();
        $brand = brand::all();
        $age = age::all();
        $item_weight = item_weight::all();
        $shipping_weight = shipping_weight::all();
        $origin_country = origin_country::all();
        return view('nursery.product', compact('category', 'subcategory',
            'name','brand','age','item_weight','shipping_weight','origin_country'));
    }

    public function NurseryProductList()
    {
        $product = product::with('category','name','brand')->orderBy('id','DESC')->get();
        return view('nursery.product_list',compact('product'));
    }

    public function NurseryProductAdd(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'brand' => 'required',
            'name' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'color' => 'required|max:191',
            'age' => 'required|digits_between:1,10|integer',
            'item_weight' => 'required|digits_between:1,10|integer',
            'shipping_weight' => 'required|digits_between:1,10|integer',
            'height' => 'required|digits_between:1,10|integer',
            'width' => 'required|digits_between:1,10|integer',
            'price' => 'required|digits_between:1,10|integer',
            'discount' => 'required|digits_between:1,10|integer',
            'image' => 'required',
            'image2' => 'required',
            'image3' => 'required',
            'image4' => 'required',
            'video' => 'max:191',
            'qty' => 'required|digits_between:1,10|integer',
            'delivery_charge' => 'required|digits_between:1,10|integer',
            'origin_country' => 'required',
            'temperature' => 'required|digits_between:1,10|integer',
            'warranty' => 'required|max:500',
            'related_item' => 'required',
        ]);

        $insert = new product();
        $insert->category_id = $request->category_id;
        $insert->subcategory_id = $request->subcategory_id;
        $insert->brand_id = $request->brand;
        $insert->name_id = $request->name;
        $insert->short_description = $request->short_description;
        $insert->long_description = $request->long_description;
        $insert->color = $request->color;
        $insert->age_id = $request->age;
        $insert->item_weight_id = $request->item_weight;
        $insert->shipping_weight_id = $request->shipping_weight;
        $insert->height = $request->height;
        $insert->width = $request->width;
        $insert->price = $request->price;
        $insert->discount = $request->discount;
        $insert->video = $request->video;
        $insert->qty = $request->qty;
        $insert->with_fruit = $request->with_fruit;
        $insert->delivery_charge = $request->delivery_charge;
        $insert->origin_country_id = $request->origin_country;
        $insert->temperature = $request->temperature;
        $insert->warranty = $request->warranty;
        $insert->related_item = implode(',',$request->related_item);

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileStore = rand(10, 100) . time() . "." . $extension;
            $request->file('image')->storeAs('public/tree', $fileStore);
            $insert->image = $fileStore;
        }

        if ($request->hasFile('image2')) {
            $extension1 = $request->file('image2')->getClientOriginalExtension();
            $fileStore1 = rand(10, 100) . time() . "." . $extension1;
            $request->file('image2')->storeAs('public/tree', $fileStore1);
            $insert->image2 = $fileStore1;
        }

        if ($request->hasFile('image3')) {
            $extension2 = $request->file('image3')->getClientOriginalExtension();
            $fileStore2 = rand(10, 100) . time() . "." . $extension2;
            $request->file('image3')->storeAs('public/tree', $fileStore2);
            $insert->image3 = $fileStore2;
        }

        if ($request->hasFile('image4')) {
            $extension3 = $request->file('image4')->getClientOriginalExtension();
            $fileStore3 = rand(10, 100) . time() . "." . $extension3;
            $request->file('image4')->storeAs('public/tree', $fileStore3);
            $insert->image4 = $fileStore3;
        }

        $insert->save();

        Session::flash('message', 'Product add successfully');
        return redirect('nursery-product');

    }

    public function SelectSubcategory(Request $request)
    {

        return json_encode(subcategory::where('category_id',$request->id)->get());
    }
}
