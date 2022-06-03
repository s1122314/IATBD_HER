<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use DB;

class UserController extends Controller
{

    public function index(){
        return view("users.index", [
            "user" => \App\Models\User::all()
        ]);
        return \App\Models\User::all();
    }
    public function show($id){

        return view("users.show",[
            "user" => \App\Models\User::find($id),
        ]);
    }

    public function userProducts($id){
        $products = \App\Models\User::find($id)->myProducts;
        return view("users.showProducts", ['products' => $products]);
    
    }

    public function create(){

        
        return view("users.create",[
            "users" => \App\Models\User::all(),
        ] );

        
    }

    public function store(Request $request, \App\Models\User $user){
        
        $user->review = $request->input("review");
        $user->id = $request->input("id");

        try{
            DB::update("UPDATE users SET review = '$user->review' WHERE id = '$user->id'");
            return redirect('/');
        }
        catch(Exception $e){
        return redirect('/user/{id}/create');
    }
}

    public function update(Request $request , \App\Models\User $user) {
        $user->review = $request->input("review");
        DB::update('update from product where name = ?', [$name]);
        return redirect('/');
}

    public function block($id) {
        $user = \App\Models\User::find($id);
        $user->role = 'blocked';
        $user->save();

        return redirect('/user/' . $id);
}

    public function unblock($id) {
        $user = \App\Models\User::find($id);
        $user->role = 'Gast';
        $user->save();

        return redirect('/user/' . $id);
}

    public function blocked(){
        return view("blocked");
}



}