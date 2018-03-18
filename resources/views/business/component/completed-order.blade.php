
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Order History</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Order History</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
        <div class="row">
            @foreach($orders as $order)
              <div class="col-sm-6 col-md-4 text-center">
                <div class="thumbnail" style="border: 1px dotted grey; border-radius: 10px;">
                  <img src="{{ $order->item->image }}" alt="{{ $order->item->name }}">
                  <div class="caption">
                    <h3>{{ $order->item->name }}</h3>
                    <p>Quantity: {{ $order->quantity }}</p>
                    <p>Price: {{ $order->formatted_price }}</p>
                    <p>Status: {{ $order->status }}</p>
                    <p><a href="#" class="btn btn-primary" role="button">More</a></p>
                    <div class="well well-sm" style="border-radius: 10px; border: 1px dotted grey; margin: 10px;">
                        <p><b>Customer Information</b></p>
                        <hr>
                        <p>Customer Name: {{ $order->customer->name }}</p>
                        <p>Customer Phone: {{ $order->customer->phone }}</p>
                        <p>Customer Address: {{ $order->customer->address }}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
        <div class="row">
        <p>Description: <br> Description</p>

</div>
<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
