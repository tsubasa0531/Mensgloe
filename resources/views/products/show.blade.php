<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menscosmetics</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
   <body>
    <h1>製品名</h1>
       <h1>{{ $product->name }}</h1>
    <div class="content">
        <div class="content_product">
    <h2>製品説明</h2>
    <p>{{ $product->body }}</p>
    <h3>製品値段</h3>   
    <p>{{ $product->price }}</p>
    <a href="{{ route('reviews.create', $product->id) }}">口コミを投稿する</a>
            <a href="/">戻る</a>
        </div>
        </div>
</body>
</html>