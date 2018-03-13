
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Items</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Items</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        @foreach($items as $item)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Item Name</h3>
              <p>Quantity: <br> Quantity</p>
              <p>Price: <br> Price</p>
              <p><a href="#" class="btn btn-primary" role="button">More</a></p>
            </div>
          </div>
        </div>
        @endforeach()
</div>
<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
