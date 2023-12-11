<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>kutikomi</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
</head>
       <body>
          <!-- resources/views/products/create.blade.php -->

<form action="/products" method="POST">
    @csrf
    <h1>製品登録</h1>
    <div>
        <label for="name">製品名</label>
        <input type="text" name="product[name]" placeholder="製品名を入力" value="{{ old('product.name') }}"/>
        <p class="name_error" style="color:red">{{ $errors->first('product.name') }}</p>
    </div>

    <div>
        <label for="body">製品説明</label>
         <textarea name="product[body]" placeholder="製品の説明を入力してください。">{{ old('product.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('product.body') }}</p>
    </div>

    <div>
        <label for="price">価格</label>
        <input type="number" name="product[price]" placeholder="製品の価格を入力してください" value="{{ old('product.price') }}"/>
                <p class="price__error" style="color:red">{{ $errors->first('product.price') }}</p>
    </div>

    <!-- 他の製品情報の入力フィールドを追加 -->
        <input type="submit" value="製品登録"/>
</form>
 <div class="back">[<a href="/">back</a></div>
 </body>