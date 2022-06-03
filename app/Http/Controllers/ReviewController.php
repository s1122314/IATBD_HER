<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index(){
        return view("products.reviews", [
            "review" => \App\Models\Review::all()
        ]);
        return \App\Models\Review::all();
    }
        
    public function create(){
        return view("users.create", [
            
            ]);
    }

    public function store(Request $request, \App\Models\Review $review){

        $review->name = $request->input("name");
        $review->description = $request->input("description");
        try{
            $review->save();
            return redirect('/');
        }
        catch(Exception $e){
        return redirect('/user/{id}/create');
    }
}
}
