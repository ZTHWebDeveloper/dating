@extends('auth.aumas.aumas')

@section('title')
    Login
@endsection

@section('content')
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="Let's Date">
                </a>
            </div>
            <div class="login-form">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                    <div  class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group "> 
                        <input class="au-btn au-btn--block" type="submit" name="login" value="Login">   
                    </div>
                </form>
                <div class="register-link">
                    <p>
                        <a href="{{ url('/password/reset') }}">
                            Forgot Your Password ?
                        </a> 
                        |
                        <a href="{{ url('/register') }}">Sign Up</a>   
                    </p>
                </div>
            </div>
        </div>
@endsection
