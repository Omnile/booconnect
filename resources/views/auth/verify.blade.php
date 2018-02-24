@extends('layouts.auth')

@section('auth-title')
    Verify your phone number
@endsection

@section('auth-form')

    <form method="POST" action="/verify" class="form-horizontal">
        @csrf

        <p class="text-center">To use the services on {{ config('app.name') }}, it is required that you verify your phone number.</p>
        <p class="text-center"> Please provide the code we sent to {{ auth()->user()->phone }}</p>

        <br>

        <p class="text-center">or <br><br> <button class="btn-primary">Request a new code</button></p>

        <hr>

        <div class="form-group row">
            <label for="code" class="col-md-4 col-form-label text-md-right control-label">Verification code</label>

            <div class="col-md-6">
                <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" value="{{ old('code') }}" required autofocus>

                @if ($errors->has('code'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('code') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Verify me
                </button>
            </div>
        </div>
    </form>
@endsection
