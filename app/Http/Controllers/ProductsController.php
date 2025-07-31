<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //

    public function addProduct(){
        return view('ourteam.create');
    }

    public function createProduct(Request $request){

        $post = new Product();
        $post->name = $request->prodname;
        $post->description = $request->proddesc;
        $post->quantity = $request->prodq;
        $post->save();
        return back()->with('post_created', 'Post created successfully');

    }
}
