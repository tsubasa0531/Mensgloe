<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>口コミ投稿</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
       <form action="{{ route('reviews.store') }}" method="POST">
    @csrf
       </form>
    <div>
        <label for="title">製品名</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        <!-- oldヘルパーは、フォームの再表示時に以前の入力値を保持します -->
    </div>

    <div>
        <label for="content">内容:</label>
        <textarea id="content" name="content">{{ old('content') }}</textarea>
    </div>

    <!-- 他の必要なフォームフィールドを追加 -->

    <div>
        <button type="submit">投稿する</button>
    </div>
</form>
        