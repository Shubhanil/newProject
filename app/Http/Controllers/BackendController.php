<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Exception;
class BackendController extends Controller
{
    public function listCategory(){
        $categories = Category::where('is_active',1)->get();
        return view('category.index')->with([
            'categories' => $categories 
        ]);
    }

    public function addCategory(Request $request){



        try {
            $add = new Category();
            $add->name = $request->name;
            $add->description = $request->description;
            $add->parent_id = $request->parent_id;
            $add->is_active = 1;
            $add->save();

            return redirect()->route('listCategory');

        } catch (\Exception $e) {
            //throw $th;
        }

    }

    public function createCategory(){
        $categories = Category::where('is_active',1)->get();
        return view('category.add')->with([
            'categories' => $categories
        ]);
    }

    public function editCategory($id){
        $category = Category::where('id',$id)->first();
        $categories = Category::where('is_active',1)->get();
        return view('category.view')->with([
            'category' => $category,
            'categories' => $categories
        ]);
    }

    public function updateCategory(Request $request){


        try {
            $update = Category::findOrFail($request->id);
            $update->name = $request->name;
            $update->description = $request->description;
            $update->parent_id = $request->parent_id;
            $update->is_active = $request->is_active;
            $update->save();

            return redirect()->route('listCategory');

        } catch (\Exception $e) {
            //throw $th;
        }

    }

    public function deleteCategory($id){
        
        Category::where('id',$id)->delete();

        return redirect()->route('listCategory');

    }


    public function listProduct(){
        $products = Product::where('is_active',1)->with('category')->get();
        return view('product.index')->with([
            'products' => $products 
        ]);
    }

    public function addProduct(Request $request){


        try {
            $add = new Product();
            $add->name = $request->name;
            $add->category_id = $request->category_id;
            $add->price = $request->price;
            $add->cgst = $request->cgst;
            $add->sgst = $request->sgst;
            $add->total_inc_tax = $add->cgst + $add->sgst+ $add->price;
            $add->description = $request->description;
            $add->is_active = 1;
            $add->save();

            return redirect()->route('listProduct');

        } catch (\Exception $e) {
            //throw $th;
        }

    }

    public function createProduct(){
        $categories = Category::where('is_active',1)->get();
        return view('product.add')->with([
            'categories' => $categories
        ]);
    }

    public function editProduct($id){
        $categories = Category::where('is_active',1)->get();
        $product = Product::where('id',$id)->first();
        return view('product.view')->with([
            'product' => $product,
            'categories'=>$categories
        ]);
    }

    public function updateProduct(Request $request){


        try {
            $update = Product::findOrFail($request->id);
            $update->name = $request->name;
            $update->description = $request->description;
            $update->cgst = $request->cgst;
            $update->sgst = $request->sgst;
            $update->price = $request->price;
            $update->total_inc_tax = $update->cgst + $update->sgst+ $update->price;
            $update->description = $request->description;
            $update->is_active = $request->is_active;
            $update->save();

            return redirect()->route('listProduct');

        } catch (\Exception $e) {
            //throw $th;
        }

    }

    public function deleteProduct($id){
        
        Product::where('id',$id)->delete();

        return redirect()->route('listProduct');

    }





}
