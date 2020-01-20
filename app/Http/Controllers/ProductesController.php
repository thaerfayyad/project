<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Session;

class ProductesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        return view('admin.product.index')->with('products',Product::all())
                                               ->with('categories',Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        if($category->count() ==0 ){

            session::flash('success', 'at least one  category to add the products !');
            return redirect()->route('createCategory');

        }else{

            return view('admin.product.create')->with('categories',Category::all());

        }

    }


    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required|max:255',
            'description'=>'required|max:255',
            'price'=>'required',
            'feature'=>'required|mimes:jpeg,bmp,png',
            'categories_id'=>'required',

        ]);

        $product = new Product();
        //dd($request->all());

        $feature = $request->file('feature');
        $feature_new_name = time()."-".$feature->getClientOriginalName();
        $feature->move('images/products', $feature_new_name);

        $product->name = $request->name;
        $product->description= $request->description;
        $product->price = $request->price;
        $product->category_id= $request->categories_id;
        $product->feature = $feature_new_name;
        $product->save();
        session::flash('success', 'the product successfully created ! ');
        //dd($product);
        return redirect()->back();



    }


    public function show($id)
    {

    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit')->with('product',$product)
                                               ->with('Categories',Category::all()) ;
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'description'=>'required|max:255',
            'price'=>'required',
            'feature'=>'required|mimes:jpeg,bmp,png',
            'categories_id'=>'required',

        ]);


        $product =  Product::find($id);
        //dd($request->all());

        $feature = $request->file('feature');
        $feature_new_name = time()."-".$feature->getClientOriginalName();
        $feature->move('images/products', $feature_new_name);

        $product->name = $request->name;
        $product->description= $request->description;
        $product->price = $request->price;
        $product->category_id = $request->categories_id;
        $product->feature = $feature_new_name;
        $product->save();
        session::flash('success', 'the product successfully created ! ');
        //dd($product);
        return redirect()->route('Products');

    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        session::flash('success', 'the product successfully Deleted ! ');
        return redirect()->back();
    }


    //                          ****CARTS ****
    // cart methods
    public function cart()
    {
        $cart = session()->get('cart');
        //session()->flush();
       // dd($cart);
        return view('admin.layouts.cart')->with('carts', $cart);
    }
    public function layout()
    {
        session()->flush();
        $cart = session()->get('cart');
        return view('admin.layouts.layouts')->with('carts', $cart);
    }
    public function addToCart($id)
    {

       // dd($id);
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "id" => $product->id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "description" =>$product->description,
                    "price" => $product->price,
                    "feature" => $product->feature
                ]
            ];

            session()->put('cart', $cart);
            session()->save();

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);
            session()->save();
            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->id,
            "name" => $product->name,
            "quantity" => 1,
            "description" =>$product->description,
            "price" => $product->price,
            "feature" => $product->feature
        ];

        session()->put('cart', $cart);
        session()->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function deleteCart($id)
    {
        //dd($id);
        $product = Product::find($id);
        $id = $product['id'];

        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        session()->save();
        return redirect()->back();
    }
}
