<?php

namespace App\Http\Controllers;

use App\brand;
use App\category;
use App\subcategory;
use App\tag;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    public function AdminCategory()
    {
        return view('admin.category');
    }

    public function AdminCategoryAdd(Request $request)
    {
        $request->validate([
            'category' => 'required|max:191|unique:categories',
        ]);

        $insert = new category();
        $insert->category = $request->category;
        $insert->save();

        Session::flash('message', 'Category add successfully');
        return redirect('admin-category');
    }

    public function AdminCategoryList()
    {
        $category = category::orderBy('id', 'DESC')->get();
        return view('admin.category_list', compact('category'));
    }

    public function AdminCategoryDelete(Request $request)
    {
        if ($request->delete) {
            $category = category::find(base64_decode($request->delete));
            $category->delete();
            Session::flash('message', 'Category Delete Successfully');
            return redirect('admin-category-list');
        } else {
            echo "Something Wrong";
        }
    }

    public function AdminSubcategory()
    {
        $category = category::all();
        return view('admin.subcategory', compact('category'));
    }

    public function AdminSubcategoryAdd(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory' => 'required|max:191|unique:subcategories',
        ]);

        $insert = new subcategory();
        $insert->subcategory = $request->subcategory;
        $insert->category_id = $request->category_id;
        $insert->save();

        Session::flash('message', 'Subcategory add successfully');
        return redirect('admin-subcategory');
    }

    public function AdminSubcategoryList()
    {
        $subcategory = subcategory::with('category')->orderBy('id', 'DESC')->get();
        return view('admin.subcategory_list', compact('subcategory'));
    }

    public function AdminSubcategoryDelete(Request $request)
    {
        if ($request->delete) {
            $category = subcategory::find(base64_decode($request->delete));
            $category->delete();
            Session::flash('message', 'Sub Category Delete Successfully');
            return redirect('admin-subcategory-list');
        } else {
            echo "Something Wrong";
        }
    }

    public function AdminBrand()
    {
        return view('admin.brand');
    }

    public function AdminBrandAdd(Request $request)
    {
        $request->validate([
            'tag_name' => 'required|max:191|unique:tags',
        ]);

        $insert = new brand();
        $insert->name = $request->tag_name;
        $insert->save();

        Session::flash('message', 'Tag add successfully');
        return redirect('admin-brand');
    }

    public function AdminBrandList()
    {
        $tag = brand::with(array('product' => function($query) {$query->where('status', 1);
        }))->orderBy('id', 'DESC')->get();
        return view('admin.tag_list', compact('tag'));
    }

    public function AdminBrandStatus(Request $request)
    {
        if ($request->approve) {
            $insert = brand::find(base64_decode($request->approve));
            $insert->status = 1;
            $insert->save();

            return redirect()->back();
        } else if ($request->unapproved) {
            $insert = brand::find(base64_decode($request->unapproved));
            $insert->status = 0;
            $insert->save();

            return redirect()->back();
        } else {
            abort('404');
        }
    }

    public function AdminTagDelete(Request $request)
    {
        if ($request->delete) {
            $category = brand::find(base64_decode($request->delete));
            $category->delete();
            Session::flash('message', 'Brand Delete Successfully');
            return redirect('admin-brand-list');
        } else {
            echo "Something Wrong";
        }
    }
}
