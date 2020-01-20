<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {

        return view('layouts.index')->with('products',Product::all());
    }
    public function showCategoryProducts($id){
        $products = Product::find($id);

        return view('layouts.showCategoryProducts')->with('product',$products);
    }
}
