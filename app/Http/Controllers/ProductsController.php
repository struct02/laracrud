<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ProductsController extends Controller
{
    //

    public function addProduct(){
        return view('ourteam.create');
    }

    public function createProduct(Request $request){

        $post = new Product();
        $post->prodname = $request->prodname;
        $post->prodq = $request->prodq;
        $post->proddesc = $request->proddesc;
        $post->save();

    }
}
