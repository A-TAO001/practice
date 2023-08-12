@extends('layout')

@section('content')
<h1>商品詳細画面</h1>
<div class="deta-conteinar">
  <div class="left">
  <ul class="deta-menu">
    <li>ID</li>
    <li class="deta-img">商品画像</li>
    <li>商品名</li>
    <li>価格</li>
    <li>在庫数</li>
    <li>メーカー名</li>
    <li>コメント</li>
  </ul>
  </div>

  <div class="right">
    <ul class="deta-menu">
      <li>{{ $product->id }}</li>
      <li class="product-img"><img src="{{asset($product->img_path) }}" alt=""></li>
      <li>{{ $product->product_name }}</li>
      <li>¥{{ $product->price }}</li>
      <li>{{ $product->stock }}</li>
      <li>{{ $product->company->company_name }}</li>
      <li>{{ $product->comment }}</li>
    </ul>
  </div>
 </div>
 <button data-route="{{ route('update_view', ['id' => $product->id]) }}" class="auth_btn green edit-button">編集</button>
@endsection
<!-- 詳細画面 -->