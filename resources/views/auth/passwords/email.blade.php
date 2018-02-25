@extends('layouts.auth')

@section('auth-title')
    Forgot Password
@endsection

@section('auth-form')

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-right">Phone Number</label>

            <div class="col-md-6">
                <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Send OTP Code
                </button>
            </div>
        </div>
    </form>
@endsection
