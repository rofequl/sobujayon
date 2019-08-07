<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function AdminUnapprovedProduct()
    {
        $product = product::with('name')->where('status', 0)->orderBy('id','DESC')->get();
        return view('admin.unapproved_product', compact('product'));
    }

    public function AdminApprovedProduct()
    {
        $product = product::with('name')->where('status', 1)->orderBy('id','DESC')->get();
        return view('admin.approve_product', compact('product'));
    }

    public function AdminUnapprovedProductSingle($id)
    {
        $product = product::with('name', 'category', 'subcategory', 'origin_country')->where('id', base64_decode($id))->first();
        return view('admin.product_info', compact('product'));
    }

    public function AdminProductStatus(Request $request)
    {
        if ($request->approve) {
            $product = product::find(base64_decode($request->approve));
            $product->status = 1;
            $product->save();

            Session::flash('message', 'Product approve successfully');
            return redirect()->back();
        }else if ($request->unapproved) {
        $product = product::find(base64_decode($request->unapproved));
        $product->status = 0;
        $product->save();

        Session::flash('message', 'Product unapproved successfully');
        return redirect()->back();
    } else {
            abort('404');
        }
    }
}
