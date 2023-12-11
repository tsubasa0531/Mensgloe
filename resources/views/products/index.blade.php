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
    <div class="nav-container">
    <a href='/products/create'><button  class="nav-button">製品投稿</button></a>
    <a href='/reviews/create'><button class="nav-button">クチコミ投稿</button></a>
    <a href='/osusumes/index'><button class="nav-button">おすすめ製品一覧</button></a>
    </div>
    <div class="nav-container">
    <a href='/beautys/index'><button class="nav-button">美容トレンド情報</button></a>
    <a href='/products/show'><button class="nav-button">お気に入り登録</button></a>
    <a href='/reviews/create'><button class="nav-button">クチコミ閲覧&評価</button></a>
    </div>
        <div class='products'>
            @foreach ($products as $product)
                <div class='product'>
                    <h2 class='name'>{{ $product->title }}</h2>
                    <p class='body'>{{ $product->body }}</p>
                    <p class='price'>{{ $product->price }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $products->links() }}
        </div>
    <div class="image">
         </div>
    　<div class='posts'>
    　    <div class='post'>
    　       <p1>製品検索</p1>
    　    </div>
<form method="GET" action="/product">
    <input type="search" placeholder="製品名を入力"name="search" value="@if (isset($search)) {{ $search }} @endif">
    <div>
        <button type="submit">検索</button>
        <button>
            <a href="/product" class="text-white">
                クリア
            </a>
        </button>
    </div>
   </form>
        </div>
    　</div>
    　<body>