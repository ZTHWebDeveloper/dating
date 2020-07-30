@extends('auth.aumas.aumas')

@section('title')
    Send Password Reset Link
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
            <div class="login-form">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                              @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group "> 
                        <input class="au-btn au-btn--block" type="submit" name="reset" value="Send Password Reset Link">   
                    </div>
                </form>
                
            </div>
        </div>
@endsection

