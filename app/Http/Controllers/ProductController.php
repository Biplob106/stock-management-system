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

        $categories = Category::all();

        return view('products.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            'quantity'=>'required',
            'description'=>'required',
            'price'=>'required',
            'unique_code'=>'required',
            'feature_image'=>'required|image|mimes:jpeg,jpg,png,gif',

        ]);
        $input = $request->all();

        if ($image = $request->file('feature_image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['feature_image'] = $profileImage;

        }
        Product::create($input)->save();
        return redirect()->route('product.index')
                        ->with('success','product created successfully.');

    }
    public function show($id){

        $product=Product::find($id);
        return view('products.show',compact('product'));
    }
    public function edit($id){
        $product = Product::find($id);

        return view('products.edit',compact('product'));

        }

    public function update(Request $request ,$id){
        $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            'quantity'=>'required',
            'description'=>'required',
            'price'=>'required',
            'unique_code'=>'required',
            'feature_image'=>'required|image|mimes:jpeg,jpg,png,gif',

        ]);
        $input = $request->all();

        if ($image = $request->file('feature_image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['feature_image'] = $profileImage;

        }
        Product::create($input)->save();

        return redirect()->route('product.index')
                        ->with('success','Product updated successfully.');
    }
    public function destroy($id){

        $product=Product::find($id)->delete();

       return redirect()->route('product.index')->with('success','product deleted successfully');
    }

}
