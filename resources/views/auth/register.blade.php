@extends('auth_layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-offset-3 col-md-6">
            <nav class="panel panel-default">
                <h1 class="panel-heading">ユーザー新規登録画面</h1>
                <div class="panel-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_name" placeholder="ユーザーネーム" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="メールアドレス" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="パスワード(8文字)" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="パスワード確認用" />
                        </div>
                        <div class="text-right">
                            <button type="submit" class="auth_btn orange">登録</button>
                        </div>
                    </form>
                    <button data-route="{{ route('login') }}" class="auth_btn blue top-button">戻る
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection