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
    <div class="col-sm-4 offset-sm-1 col-md-3 offset-md-1 text-center">
      <div class="thumbnail"  style="border: 1px dotted grey; border-radius: 10px; padding: 10px">
        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-responsive">
        <div class="caption">
          <h3>{{ $item->name }}</h3>
          <p>Quantity:  {{ $item->quantity }}</p>
          <p>Price: {{ $item->price }}</p>
          <p>
            <a href="/items/{{ $item->id }}" class="btn btn-primary" role="button">More</a>
            <a href="/items/{{ $item->id }}/edit" class="btn btn-default" role="button">Edit</a>
          </p>
        </div>
      </div>
      <br>
    </div>
    @endforeach()
  </div>
  <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
