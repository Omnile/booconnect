            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Profile</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <div class="container-fluid" id="profile">
                <div class="row">
                    <div class="col-lg-10 offset-1">
                        <div class="card">
                            <div class="card-body">
                                <h4>PROFILE</h4>

                                <hr>
                                    <div class="row">
                                        <div class="col-md-5">
                                        <p><h4>Name :</h4> </p>
                                    </div>
                                    <div class="col-md-7">
                                       <p><h4> name</h4></p>
                                    </div>
                                </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                        <p><h4>User Name :</h4> </p>
                                    </div>
                                    <div class="col-md-7">
                                       <p><h4>user name</h4></p>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                        <p><h4>Restaurant Name :</h4> </p>
                                    </div>
                                    <div class="col-md-7">
                                       <p><h4>restaurant name</h4></p>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                        <p><h4>Business Registration Number :</h4> </p>
                                    </div>
                                    <div class="col-md-7">
                                       <p><h4> business number</h4></p>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                        <p><h4>Phone number :</h4> </p>
                                    </div>
                                    <div class="col-md-7">
                                       <p><h4> phone number</h4></p>
                                    </div>
                                </div>
                                    <hr>
                                <div><button class="float-right btn btn-sm btn-danger" onclick="update()">Edit Profile</button></div>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- Update Profile --}}
            <div class="container-fluid" id="update" style="display: none;">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="login-form">
                                <h4>PROFILE</h4>
                                <hr>
                                <form action="#" method="POST">
                                    @csrf
                                	<div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>First Name</label>
                                        <input required type="text" name="firstname" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Last Name</label>
                                        <input required type="text" name="lastname" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>User Name</label>
                                        <input required type="text" name="username" class="form-control" placeholder="User Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Business Registration Number</label>
                                        <input required type="text" name="registration_number" class="form-control" placeholder="business registration number">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Restaurant Name</label>
                                        <input required type="text" name="restaurantname" class="form-control" placeholder="Restaurant Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Phone number</label>
                                        <input required type="text" name="phone" class="form-control" placeholder="phone number">
                                    </div>
                                </div>
                                    <div class="row">
                                    	<div class="col-lg-4 offset-8">
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Update Profile</button>
                                </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
