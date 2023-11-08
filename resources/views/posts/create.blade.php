<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>kutikomi</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
       <body>
           <h1>今使っているコスメをクチコミ共有しよう</h1>
           <form action="/posts" method="POST">
               @csrf
               <div class="製品名">
                   <h2>製品名</h2>
                   <input type="text" name="post[製品名]" placeholder="製品名を入力してください"/>
               </div>
               <div class='製品のクチコミ'></div>
               <h2>製品クチコミ</h2>
               <textarea name="post[製品クチコミ]" placeholder="製品をクチコミしてください"></textarea>
               <div>
                   <input type="submit" value="store"/>
               </div>
           </form>
           <div class="footer">
               <a href="/">戻る</a>
           </div>
             extends('layouts.app')

@section('content')
    <div class="container">
        <h3>レビューを投稿する</h3>
        <form method="POST" action="{{ route('reviews.store') }}">
            @csrf

            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">本文</label>
                <textarea name="body" id="body" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">投稿する</button>
        </form>
         </div>
@endsection
       </body>
</html>
