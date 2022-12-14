<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\isAdmin;


class ProductController extends Controller
{
    public function __construct(){

        //$this->middleware('isAdmin')->except(['show' , 'index']);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $countPost = Product::where('user_id', Auth::id())->count();
        return view('products.index', compact('products','countPost'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$tags = \App\Tag::get()->pluck('name', 'id');
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required||in :Nike,Adidas,New Balance,Puma',
            'description' => 'required',
            'user_id' => 'required',
        ]);

        Product::create($data);
        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::find($product->id);
        return view('products.edit')->with('products', $product);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required||in :Nike,Adidas,New Balance,Puma',
            'description' => 'required'
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }

    public function search(){
        $search_txt = $_GET['query'];
        $products = Product::where('name','LIKE', '%'.$search_txt. '%')
            ->orWhere('category','LIKE', '%'.$search_txt. '%')->get();

        return view('products.search', compact('products'));

    }
    public function changeStatus(Request $request)
    {
        $product = Product::find($request->id);
        $product->status = $request->status;
        $product->save();

        return response()->json(['success'=>'Status changed successfully.']);
    }

    public function filter(Request $request){

        $filter = $request->query('filter');
        $products = Product::where('category', 'LIKE', '%' . $filter. '%')->get();
        return view('products.filter', compact('products'));
    }




}
