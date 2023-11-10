<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Product;
use App\Http\Requests\PostRequest;
class PostController extends Controller
{ 
    public function index(Post $post,Product $product)
    {
        return view('posts.index')->with(['products' => $product->get(),'reviews' => $post->getPaginateByLimit()]); 
    }
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    
 
}
