<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product=Product::get();

       return view('products.index' ,compact('product'));
    }

    public function create(){

        $product = Category::all();

        return view('products.create',compact('product'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'category-name'=>'required',
            'quantity'=>'required',
            'description'=>'required',
            'price'=>'required',
            ' image-gallery '=>'required|image|mimes:jpeg,jpg,png,gif',
            ' feature-image '=>'required|image|mimes:jpeg,jpg,png,gif',

        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;

        }
        Product::create($input)->save();

        return redirect()->route('product.index')
                        ->with('success','category created successfully.');

    }
}
