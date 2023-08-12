@extends('layout')

@section('content')
<h1>更新画面</h1>
<div class="deta-conteinar">
  <div class="left">
  <ul class="deta-menu">
    <li>ID</li>
    <li">商品名</li>
    <li>メーカー名</li>
    <li>価格</li>
    <li>在庫数</li>
    <li>コメント</li>
    <li>画像ファイル</li>
  </div>
  <div class="right">
    <form method="post" action="{{ route('update_edit', ['id' => $product->id]) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
  <ul class="deta-menu">
    <li>{{$product->id }}</li>
    <li><input type="text" name="product_name" ></li>
    @error('product_name')
        <span class="error">{{ $message }}</span>
    @enderror
 <li><select name="company_id" id="company_name">
      @foreach($companies as $company)
      <option value="{{$company->id}}">{{ $company->company_name }}</option>
      @endforeach
    </select></li>
    <li><input type="text" name="price"></li>
    @error('price')
        <span class="error">{{ $message }}</span>
    @enderror
    <li><input type="text" name="stock"></li>
    @error('stock')
        <span class="error">{{ $message }}</span>
    @enderror
    <li><input type="text" name="comment"></li>
    @error('comment')
        <span class="error">{{ $message }}</span>
    @enderror
    <li><input type="file" name="img_path" ></li>
    @error('img_path')
        <span class="error">{{ $message }}</span>
    @enderror
</ul>
  </div>
</div>
<input type="submit" value="更新">
</form>
@endsection
<!-- 更新画面 -->