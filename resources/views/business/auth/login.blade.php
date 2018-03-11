@extends('business.auth.layout')

@section('contents')

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>LOGIN</h4>
                                <hr>
                                <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="username">Username</label>
                                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                            @if ($errors->has('username'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
                                    </div>

                                    <div class="form-group row">
                                        <label for="password">Password</label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                    </div>


                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                        <label class="pull-right">
                                            <a href="#">Forgotten Password?</a>
                                        </label>

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="registers"> Sign Up Here</a></p>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
