<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class CatergoryController extends Controller
{
    public function index(){
        $categorys=Category::all();

        return view('category.index',compact('categorys'));
    }
    public function create(){

     return view('category.create');
    }
     public function store( Request $request)
     {
        $request->validate([
            'name'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png,gif'
        ]);
        $input = $request->except('_token');

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;

        }
        Category::create($input)->save();

        return redirect()->route('category.index')
                        ->with('success','category created successfully.');

     }
     public function show($id){
        $category = Category::find($id);
        return view('category.show', compact('category'));


     }
    public function edit($id){
        $category = Category::find($id);

        return view('category.edit',compact('category'));

    }
     public function update(  Request $request ,$id){
        $request->validate([
            'name'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        $category = Category::findOrFail($id);

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }
        $category->update([
            'name'=>$request->name,
            'image'=>$request->image,
        ]);
        return redirect()->route('categorys.index')
          ->with('success', 'category updated successfully.');

     }
     public function delete($id){

       $category=Category::find($id)->delete();

       return redirect()->route('category.index')
       ->with('success','category deleted successfully');
     }

}
