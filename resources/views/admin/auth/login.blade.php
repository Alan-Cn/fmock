@extends('__layout.layout')

@section('title', '登录')

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin/auth/login.css')}}">
@endsection

@section('content')
    <div class="content">

        <div class="col-lg-6">
            <form id="js-login-from" class="form-horizontal" role="form" method="POST">
                <div class="form-group">
                    <label for="email">@lang('app.account')</label>
                    <input type="text" name="account" id="account" class="form-control" value="{{ old('account') }}" placeholder="@lang('app.account')" autofocus>
                </div>

                <div class="form-group">
                    <label for="password">@lang('app.password')</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-default" id="js-dologin">@lang('app.submit')</button>
                </div>
            </form>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{asset('js/admin/auth/login.js')}}"></script>
@endsection