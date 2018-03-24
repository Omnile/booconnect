@extends('business.auth.layout')

@section('contents')

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>REGISTER</h4>
                                <hr>
                                <form action="/register" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>First Name</label>
                                            <input required type="text" name="firstname" class="form-control" placeholder="First Name" value="{{ old('firstname') }}">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Last Name</label>
                                            <input required type="text" name="lastname" class="form-control" placeholder="Last Name"  value="{{ old('lastname') }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Gender</label>

                                            <select required name="gender" class="form-control" placeholder="Select gender">
                                                <option value="">Select Gender</option>
                                                <option value="male"
                                                {{ old('gender') === 'male' ? 'selected' : null}}>Male</option>
                                                <option value="female"
                                                {{ old('gender') === 'female' ? 'selected': null}}>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Address</label>
                                            <input required type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>User Name</label>
                                            <input required type="text" name="username" class="form-control" placeholder="User Name" value="{{ old('username') }}">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Phone number</label>
                                            <input required type="text" name="phone" class="form-control" placeholder="phone number" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Business Name</label>
                                            <input required type="text" name="name" class="form-control" placeholder="Restaurant Name"  value="{{ old('name') }}">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Business Registration Number</label>
                                            <input required type="text" name="registration_no" class="form-control" placeholder="business registration number"
                                             value="{{ old('registration_no') }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Password</label>
                                            <input required type="password" name="password" class="form-control" placeholder="Password" >
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Password Confirmation</label>
                                            <input required type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
                                        </div>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                        					<input type="checkbox"> Agree the terms and policy
                        				</label>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-4 offset-8">
                                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                        </div>
                                    </div>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="login"> Sign in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
