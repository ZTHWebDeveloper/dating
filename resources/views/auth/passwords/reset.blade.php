@extends('auth.aumas.aumas')

@section('title')
    Reset Password
@endsection

@section('content')
<div class="login-wrap">
    <div class="login-content">
        @if (session('status')) 
            <div class="alert alert-success">
                {{ session('status') }}
            </div>           
        @endif
        <div class="login-logo">
            <a href="#">
                <img src="{{ asset('images/icon/logo.png') }}" alt="Let's Date">
            </a>
        </div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
        {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>E-Mail Address</label>
                    <input type="email" class="au-input au-input--full" name="email" value="{{ $email or old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label>Password</label>
                    <input type="password" class="au-input au-input--full" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label>Confirm Password</label>
                    <input type="password" class="au-input au-input--full" name="password_confirmation" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group "> 
                    <input class="au-btn au-btn--block" type="submit" name="reset" value="Reset Password">   
                </div>
        </form>
    </div>
</div>
@endsection
