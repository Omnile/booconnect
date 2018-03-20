
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Item</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Item</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">

      <div class="col-md-3 offset-sm-1 text-center">
        <div class="thumbnail"  style="border: 1px dotted grey; border-radius: 10px; padding: 10px">
          <img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-responsive">
          <div class="caption">
            <h3>{{ $item->name }}</h3>
            <p>Quantity:  {{ $item->quantity }}</p>
            <p>Price: {{ $item->price }}</p>
            <p>Measurement: {{ $item->measurement }}</p>
            <p>
              <a href="/items/{{ $item->id }}" class="btn btn-primary" role="button">More</a>
              <a href="/items/{{ $item->id }}/edit" class="btn btn-default" role="button">Edit</a>
            </p>
          </div>
        </div>
        <br>
      </div>

      <div class="col-sm-4">
        <p>Description:</p>
        <p>
          {{ $item->description }}
        </p>
        <br>
        <p>Orders: {{ $item->orders->count() }} </p>
        <p>Wishlist: {{ $item->wishlist->count() }} </p>
        <br>
      </div>

      <div class="col-sm-4">
        @foreach ($item->rating as $review)
          {{-- expr --}}
        <div class="comments">
            <div class="comment-image">
                <figure>
                    <img src="{{ $review->user->name }}" alt="">
                </figure>
            </div><!-- end comments-image -->
            <div class="comment-content">
                <div class="comment-content-head">
                    <ul class="list list-inline comment-meta">
                        <li>
                           @for ($i = 0; $i < $review->rating; $i++)
                                <i class="fa fa-star text-warning"></i>
                            @endfor
                            {{-- <i class="fa fa-star-half-empty text-warning"></i> --}}
                            {{-- <i class="fa fa-star-o text-warning"></i> --}}
                        </li>
                    </ul>
                </div><!-- end comment-content-head -->
                <p>{{ $review->comment }}.</p>
                <cite>{{ $review->user->name }}</cite>r
            </div><!-- end comment-content -->
        </div><!-- end comments -->
        @endforeach


      </div>
    </div>

<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
