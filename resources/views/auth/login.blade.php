@extends('auth_layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-offset-3 col-md-6">
            <nav class="panel panel-default">
                <h1 class="panel-heading">ログイン</h1>
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
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control mini-form" id="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス"/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control mini-form" id="password" name="password" placeholder="パスワード"/>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="auth_btn orange">ログイン</button>
                        </div>
                    </form>
                </div>
            </nav>
            <div class="text-center">
                <button data-route="{{ route('register') }}" class="auth_btn blue top-button">新規登録</button>
            </div>
        </div>
    </div>
</div>
@endsection