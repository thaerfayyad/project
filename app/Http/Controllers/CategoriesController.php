<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Session;
use DB;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('admin.category.index')->with('categories',Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'category_name'=>'required|max:255,',
            'Descriptions'=>'required|max:255',

        ]);
        $category = new Category();
        $category->category_name =$request->category_name;
        $category->Descriptions =$request->Descriptions;
        $category->save();
        session::flash('success', 'the category successfully created ! ');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $products = Category::find($id)->products;

        return view('admin.category.showproduct')->with('products',$products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'category_name'=>'required|max:255,',
            'Descriptions'=>'required|max:255',

        ]);
        $category = Category::find($id);
        $category->category_name =$request->category_name;
        $category->Descriptions =$request->Descriptions;
        $category->save();
        session::flash('success', 'the category successfully updated! ');
        return redirect()->route('Categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categort = Category::find($id)->delete();

          // $product =Product::find($id);
           session::flash('success', 'the category successfully Deleted ! ');
            return redirect()->back();

    }
}
