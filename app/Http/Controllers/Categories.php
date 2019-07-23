<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categories extends Controller
{
    public function create(){
    	return view('create_category');
    }
    public function store(Request $request)
    {

        $category = new \App\Category();
        $category->name = $request->name;
        $category->save();

        return redirect('/');
    }
    public function detail($id){
        $category = \App\Category::find($id);
        return view('category',[
            'category'=>$category,

        ]);
    }
}
