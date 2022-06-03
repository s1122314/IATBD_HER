<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use DB;
class ProductController extends Controller
{
    public function index(){
        return view("products.index", [
            "product" => \App\Models\Product::all()
        ]);
        return \App\Models\Product::all();
    }
    public function show($id){

        return view("products.show",[
            "product" => \App\Models\Product::find($id),
        ]);

    }


    public function create(){
        return view("products.create", [
            "kind_of_product" => \App\Models\KindOfProduct::all(),
            "images" => \App\Models\Image::all(),
            
            ]);
    }

    public function store(Request $request, \App\Models\Product $product){


        $product->name = $request->input("name");
        $product->kind = $request->input("kind");
        $product->description = $request->input("description");
        $product->image = $request->input("image");
        $product->user_id = $request->input("user_id");

        try{
            $product->save();
            return redirect('/');
        }
        catch(Exception $e){
        return redirect('/product/create');
    }
}

    public function delete(){
        return view("products.destroy", [
            "names" => \App\Models\Product::all(),
            ]);
    }

    public function destroy(Request $request, \App\Models\Product $product){
        $name = $request->input('name');
        try{
            DB::delete('delete from product where name = ?', [$name]);
            return redirect('/');
        }
        catch(exception $e){
            return redirect('/product');
        }
        }

        
    public function order($id){
        return view("products.order", [
            "names" => \App\Models\Product::find($id),
            ]);
    }

    public function ordered(Request $request, \App\Models\Product $product){
        $name = $request->input('name');
        try{
            DB::delete('delete from product where name = ?', [$name]);
            return redirect('/');
        }
        catch(exception $e){
            return redirect('/product');
        }
        }
    }



