@extends('auth.aumas.aumas')

@section('title')
    Register
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
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label>Username</label>
                        <input class="au-input au-input--full"  type="text" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input  class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>

                    <div class="form-group">
                        <input class="au-btn au-btn--block"  type="submit" name="register" value="Register">
                    </div>    
                </form>
                <div class="register-link">
                    <p>
                        Already have account?
                        <a href="{{ url('/login') }}">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
