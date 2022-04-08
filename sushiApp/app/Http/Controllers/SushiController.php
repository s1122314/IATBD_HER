<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SushiController extends Controller
{
    public function index(){
        return view("sushi.index", [
            "sushi" => \App\Models\Sushi::all()
        ]);
        return \App\Models\Sushi::all();
    }
    public function show($id){

        return view("sushi.show",[
            'sushi' => \App\Models\Sushi::find($id),
        ]);
        
    }
}
