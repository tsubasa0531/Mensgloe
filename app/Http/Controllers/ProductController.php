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
            $product　= $query->paginate(20);

        }
            return view('products.index')
            ->with(['products'=>$product]);
    }
public function create()
    {
        return view('products.create');
    }

    public function store(Product $product, ProductRequest $request)
    {
        $input = $request['product'];
        $product->fill($input)->save();
        return redirect('/products/' . $product->id);
          $product->save();


        return view('products.show');
}
   public function show(Product $product)
   {
      return view('products/show')->with(['product' => $product]);
   }
}
