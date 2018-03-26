@extends('business.auth.layout')

@section('contents')
            <div class="container-fluid" style="position: relative; top: 120px;">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                        <form method="POST" action="/#" >
                            @csrf

                            <p class="text-center">To use the services on {{ config('app.name') }}, it is required that you verify your phone number.</p>
                            <p class="text-center"> Please provide the code we sent to your contact.</p>

                            <br>

                            <p class="text-center">or <br><br> <button class="btn-primary">Request a new code</button></p>

                            <hr>

                            <div class="form-group row">
                                <label for="code" class="col-md-4 col-form-label text-md-right control-label">Verification code</label>
                                <div class="col-md-6">
                                    <input id="code" type="text" class="form-control" name="code"  required autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary float-right">
                                        Verify me
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>

@endsection
