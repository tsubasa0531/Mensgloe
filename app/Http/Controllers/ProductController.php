<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Requests\ProductRequest;
use App\Models\Review;

class ProductController extends Controller
{public function index(Request $request,Product $product)
    { 
        $products = Product::orderBy('rating', 'desc')->get();
        
        $search = $request->input('search');
        
        $query = Product::query();
        
        if ($search) {
            $spaceConversion = mb_convert_kana($search, 's');
            
            $wordArraySearched =preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            
            foreach($wordArraySearched as $value) {
                $query->where('name', 'like', '%'.$value.'%');
            }
            $products　= $query->paginate(20);

        }
          return view('products.index')->with(['products' => $product->getPaginateByLimit()]);
    }
public function create()
    {
        return view('products.create');
    }

    public function store(Product $product, Request $request)
    {  
        $input = $request['product'];
        $product->fill($input)->save();
        return redirect('/products/' . $product->id);
    }
   public function show(Product $product)
   {
      return view('products.show')->with(['product' => $product]);
   }
   public function showProducts()
   {
       $products = Product::all();
       return view('products.create',['products' => $products]);
   }
}
