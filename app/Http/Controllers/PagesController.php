<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function products()
    {
        $products=Product::orderBy('id','desc')->get();
        return view('pages.product.index')->with('products',$products);
    }



    public function search(Request $request)
   {
     $search = $request->search;

       $products = Product::orWhere('title', 'like', '%'.$search.'%')
       ->orWhere('description', 'like', '%'.$search.'%')
       ->orWhere('slug', 'like', '%'.$search.'%')
       ->orWhere('price', 'like', '%'.$search.'%')
       ->orWhere('quantity', 'like', '%'.$search.'%')
       ->orderBy('id', 'desc')
       ->paginate(9);


        return view('pages.search')->withSearch($products);
   }




}
