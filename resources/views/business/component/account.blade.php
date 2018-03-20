
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Account settings</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Edit Item</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
        <form action="/account"  method="POST">
            @csrf
            <div class="row">

                    <div class="col-md-10 offset-md-1 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-elements">
                                    <legend>Account Settings</legend>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">

                                                <div class="col-md-6">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="Your First name" name="firstname" value="{{ $account->firstname }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Your Last name" name="lastname" value="{{ $account->lastname }}">
                                                </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label>Gender</label>

                                                        <select required name="gender" class="form-control" placeholder="Select gender">
                                                            <option value="">Select Gender</option>
                                                            <option value="male" {{ $account->gender == 'male'? 'selected': null }}>Male</option>
                                                            <option value="female" {{ $account->gender == 'female'? 'selected': null }}>Female</option>
                                                        </select>
                                                    </div>
                                                    {{-- <div class="col-md-6">
                                                        <label>Address</label>
                                                        <input required type="text" name="address" class="form-control" placeholder="Address">
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" placeholder="Username" name="username" value="{{ $account->username }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Phone Number</label>
                                                        <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="{{ $account->phone }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">

                                                <div class="col-md-6">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Your Password" name="password">
                                                </div>

                                                <div class="col-md-6">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control" placeholder="Your Confirm Password" name="password_confirmation">
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="basic-elements">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
