<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class RankingController extends Controller
{ public function index()
{
    $products = Product::orderBy('ranking')->get();
return view('products.product', compact('products'));
}
public function update(Request $request)
{
    $data = $request->validate(['product_id.*' => 'required|exists:products,id', 'ranking.*' => 'required|integer',]);
    foreach ($data['product_id'] as $key => $productId) {
        Product::where('id', $productId)->update(['ranking' => $data['ranking'][$key]]);
    }
    return redirect()->route('ranking.product')->with('success','ランキングが更新されました');
    }
    //
}
