<?php

namespace App\Http\Controllers;

use App\age;
use App\brand;
use App\category;
use App\height;
use App\item_weight;
use App\name;
use App\nursery;
use App\origin_country;
use App\product;
use App\shipping_weight;
use App\subcategory;
use App\temperature;
use App\width;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

use Session;

class NurseryController extends Controller
{
    public function AdminNursery()
    {
        return view('admin.nursery.nursery_add');
    }

    public function AdminNurseryList()
    {
        $nursery = nursery::select('email','name','id')->orderBy('id','DESC')->get();
        return view('admin.nursery.nurcery_list',compact('nursery'));
    }

    public function AdminNurseryListDelete(Request $request)
    {
        if ($request->delete) {

            $category = nursery::find(base64_decode($request->delete));
            $category->delete();
            Session::flash('message', 'Nursery Delete Successfully');
            return redirect('admin-nursery-list');
        } else {
            echo "Something Wrong";
        }
    }

    public function NurseryProduct()
    {
        $category = category::all();
        $subcategory = subcategory::all();
        $name = name::all();
        $brand = brand::all();
        $age = age::all();
        $item_weight = item_weight::all();
        $origin_country = origin_country::all();
        $width = width::all();
        $height = height::all();
        $temperature = temperature::all();
        return view('nursery.product', compact('category', 'subcategory',
            'name','brand','age','item_weight','origin_country','width','height','temperature'));
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
            'brand_id' => 'required',
            'name_id' => 'required',
            'color' => 'max:191',
            'age_id' => 'required|digits_between:1,10|integer',
            'item_weight_id' => 'required|digits_between:1,10|integer',
            'height_id' => 'required|digits_between:1,10|integer',
            'width_id' => 'required|digits_between:1,10|integer',
            'price' => 'required|digits_between:1,10|integer',
            'discount' => 'required|digits_between:1,10|integer',
            'profit_margin' => 'required|digits_between:1,10|integer',
            'image' => 'required|image|required|mimes:jpeg,png,jpg,gif,svg',
            'image2' => 'required|image|required|mimes:jpeg,png,jpg,gif,svg',
            'image3' => 'required|image|required|mimes:jpeg,png,jpg,gif,svg',
            'image4' => 'required|image|required|mimes:jpeg,png,jpg,gif,svg',
            'video' => 'max:191',
            'qty' => 'required|digits_between:1,10|integer',
            'delivery_charge' => 'required|digits_between:1,10|integer',
            'origin_country_id' => 'required',
            'temperature_id' => 'required|digits_between:1,10|integer',
            'what_you_will_get' => 'required|max:500',
            'related_item' => 'required',
        ]);

        $insert = new product();
        $insert->category_id = $request->category_id;
        $insert->subcategory_id = $request->subcategory_id;
        $insert->brand_id = $request->brand_id;
        $insert->name_id = $request->name_id;
        $insert->short_description = $request->short_description;
        $insert->long_description = $request->long_description;
        $insert->color = $request->color;
        $insert->age_id = $request->age_id;
        $insert->item_weight_id = $request->item_weight_id;
        $insert->height_id = $request->height_id;
        $insert->width_id = $request->width_id;
        $insert->price = $request->price;
        $insert->discount = $request->discount;
        $insert->profit_margin = $request->profit_margin;
        $insert->video = $request->video;
        $insert->qty = $request->qty;
        $insert->with_fruit = $request->with_fruit;
        $insert->with_flower = $request->with_flower;
        $insert->delivery_charge = $request->delivery_charge;
        $insert->origin_country_id = $request->origin_country_id;
        $insert->temperature_id = $request->temperature_id;
        $insert->what_you_will_get = $request->what_you_will_get;
        $insert->related_item = implode(',',$request->related_item);

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $name = rand(10, 100) . time() . "." . $extension;
            $file= $request->file('image');
            $img = Image::make($file);
            $img1 = $img->resize(1126,1126)->encode();
            Storage::put($name, $img1);
            Storage::move($name, 'public/tree/' . $name);
            $img2 = $img->resize(500,500)->encode();
            Storage::put($name, $img2);
            Storage::move($name, 'public/tree/convert/' . $name);
            $insert->image = $name;
        }

        if ($request->hasFile('image2')) {
            $extension1 = $request->file('image2')->getClientOriginalExtension();
            $fileStore1 = rand(10, 100) . time() . "." . $extension1;
            $file= $request->file('image2');
            $img = Image::make($file)->resize(1126,1126)->encode();
            Storage::put($fileStore1, $img);
            Storage::move($fileStore1, 'public/tree/' . $fileStore1);
            $insert->image2 = $fileStore1;
        }

        if ($request->hasFile('image3')) {
            $extension2 = $request->file('image3')->getClientOriginalExtension();
            $fileStore2 = rand(10, 100) . time() . "." . $extension2;
            $file= $request->file('image3');
            $img = Image::make($file)->resize(1126,1126)->encode();
            Storage::put($fileStore2, $img);
            Storage::move($fileStore2, 'public/tree/' . $fileStore2);
            $insert->image3 = $fileStore2;
        }

        if ($request->hasFile('image4')) {
            $extension3 = $request->file('image4')->getClientOriginalExtension();
            $fileStore3 = rand(10, 100) . time() . "." . $extension3;
            $file= $request->file('image4');
            $img = Image::make($file)->resize(1126,1126)->encode();
            Storage::put($fileStore3, $img);
            Storage::move($fileStore3, 'public/tree/' . $fileStore3);
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
