
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Business settings</h3> </div>
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
        <form action="/settings"  enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">

                  <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-elements">
                                    <legend>Business Images</legend>

                                    <div class="row">


                                    <div class="col-md-3 text-center">
                                        <div class="thumbnail"  style="border: 1px dotted grey; border-radius: 10px; padding: 10px">
                                          <img src="{{ $settings->image }}" alt="{{ $settings->image }}" class="img-responsive">
                                          <div class="caption">
                                            <p>Business Logo Image</p>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-center">
                                        <div class="thumbnail"  style="border: 1px dotted grey; border-radius: 10px; padding: 10px">
                                          <img src="{{ $settings->cover }}" alt="{{ $settings->cover }}" class="img-responsive">
                                          <div class="caption">
                                            <p>Business Cover Image</p>
                                          </div>
                                        </div>
                                    </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Restaurant Logo</label>
                                                <input type="file" class="form-control" value="image" name="image">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label>Restaurant Cover Image</label>
                                                <input type="file" class="form-control" value="image" name="cover">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-elements">
                                    <legend>Business Details</legend>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Business Name (Restaurant)</label>
                                                <input type="text" class="form-control" placeholder="Restaurant name" name="name" value="{{ $settings->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Business Registration Number</label>
                                                <input type="number" class="form-control" placeholder="Business registration number" name="registration_no" value="{{ $settings->registration_no }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Business Phone Number (must be verified)</label>
                                                <input type="number" class="form-control" placeholder="Business phone" name="phone" value="{{ $settings->phone }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="6" placeholder="Describe your business and what you do." style="width: 100%; height: 100%;" name="description">{{ $settings->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-elements">
                                    <legend>Business Location</legend>

                                    <div class="form-group">
                                        <label>Business location (City)</label>
                                        <input type="text" class="form-control" placeholder="Business city" name="city" value="{{ $settings->city }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Business location (State)</label>
                                        <input type="text" class="form-control" placeholder="Business state" name="state" value="{{ $settings->state }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Business location (Country)</label>
                                        <input type="text" class="form-control" placeholder="Business country" name="country" value="{{ $settings->country }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Business location (Address)</label>
                                        <input type="text" class="form-control" placeholder="Business address" name="address" value="{{ $settings->address }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Business location (Place/Closest Landmark) (e.g. Accra Mall) </label>
                                        <input type="text" class="form-control" placeholder="Business place" name="place" value="{{ $settings->place }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-elements">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
            </form>

<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
