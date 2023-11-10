<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Menscosmetics</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    </head>
    <body>
    <h1>Menscosmetics</h1>
    <a href='/posts/create'><button>クチコミ投稿</button></a>
    <a href='/posts/create'><button>ランキング</button></a>
    <a href='/posts/create'><button>おすすめ製品一覧</button></a><br>
    <a href='/posts/create'><button>美容トレンド情報</button>
    <a href='/posts/create'><button>アイテム</button></a>
    <a href='/posts/create'><button>クチコミ閲覧</button></a>
    </a>
    　<div class='posts'>
    　    <div class='post'>
    　       <p1>製品検索</p1>
    　    </div>
<form method="GET" action="{{ route('products.index') }}">
    <input type="search" placeholder="製品名を入力"name="search" value="@if (isset($search)) {{ $search }} @endif">
    <div>
        <button type="submit">検索</button>
        <button>
            <a href="{{ route('products.index') }}" class="text-white">
                クリア
            </a>
        </button>
    </div>
</form>
@foreach($products as $product)
   <a href="/posts/{{ $product->product_id }}">
        {{ $product->name }}
    </a>
    @endforeach
 @foreach($reviews as $review)  
    @if (auth()->check())
   <form method="post"
 action="{{ route('like.toggle',$review) }}">
       @csrf
       <button type="submit" class="btn btn-link">
           {{ $review->likes->count() }} 
           いいね </button>
   </form>
@else
    
   
 @endif
 @endforeach
    　</div>
    　<body>