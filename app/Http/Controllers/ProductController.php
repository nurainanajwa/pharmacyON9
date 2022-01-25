<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Pharmacist;


class ProductController extends Controller
{

    public function viewProducts()
    {
        $data = array();
        if(Session::has('loginId')) {
        $data = Pharmacist::where('id', '=', Session::get('loginId'))->first();
        }
        $products = Product::all();
        return view('phar_products', compact('products'));
    }

    public function viewHistory()
    {
        return view('phar_addnew');
    }

    public function saveProduct(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->exp_date = $request->input('exp_date');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }

        $res = $product->save();
        if ($res) {
            return back()->with('success', 'Product have successfully added');
        } else {
            return back()->with('fail', 'Something wrong.');
        }
    }

    public function editProduct($id)
    {
        $products = Product::find($id);
        return view('phar_editproduct', compact('products'));
    }

    public function updateProduct(Request $request, $id)
    {
        $products = Product::find($id);
        
        $products->name = $request->name;
        $products->exp_date = $request->exp_date;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->stock = $request->stock;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/product/', $filename);
            $products->image = $filename;
        }

        $products->update();
        return redirect()->back()->with('success', 'You have successfully update the product.');
    }

    public function deleteProduct($id)
    {
        $products = Product::find($id);

        $products->delete();
        return redirect()->back()->with('success', 'You have successfully delete the product.');
    }
}
 
