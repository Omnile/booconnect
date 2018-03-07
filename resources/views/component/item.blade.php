<section class="section white-backgorund">
    <div class="container">
        <div class="row">
            <!-- start sidebar -->
            <div class="col-sm-4">
                <div class='carousel slide product-slider' data-ride='carousel' data-interval="false">
                    <div class='carousel-inner'>
                        <div class='item active'>
                            {{-- @foreach ($item->pictures as $picture)
                                <figure>
                                    <img src='{{ $picture->path }}' alt='' />
                                </figure>
                            @endforeach --}}

                                <figure>
                                    <img src='{{ $item->image }}' alt='' />
                                </figure>
                        </div><!-- end item -->


                        <!-- Arrows -->
                        <a class='left carousel-control' href='.product-slider' data-slide='prev'>
                            <span class='fa fa-angle-left'></span>
                        </a>
                        <a class='right carousel-control' href='.product-slider' data-slide='next'>
                            <span class='fa fa-angle-right'></span>
                        </a>
                    </div><!-- end carousel-inner -->

                    <!-- thumbs -->
                    {{-- <ol class='carousel-indicators mCustomScrollbar meartlab'>
                        @foreach ($item->pictures as $picture)
                            <figure>
                                <img src='{{ $picture->path }}' alt='' />
                                <li data-target='.product-slider' data-slide-to='{{ $index }}' class='active'>
                                    <img src='{{ $picture->path }}' alt='' />
                                </li>
                            </figure>
                        @endforeach
                    </ol> --}}<!-- end carousel-indicators -->
                </div><!-- end carousel -->
            </div><!-- end col -->
            <!-- end sidebar -->
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="title">{{ $item->description }}</h2>
                            <p class="text-gray alt-font">Product code: {{ $item->id }}</p>

                            <ul class="list list-inline">
                                {{-- <li><h6 class="text-danger text-xs">$179.99</h6></li> --}}
                                <li><h5 class="text-primary">{{ $item->formatted_price }}</h5></li>
                                {{-- <li>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star-half-o text-warning"></i>
                                </li>
                                <li><a href="#">({{ $item->review->count() }} reviews)</a></li> --}}
                            </ul>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="spacer-5"><hr class="spacer-10 no-border">

                <div class="row">
                    <form method="POST" action="/cart">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="col-sm-12">
                            <p>{{ $item->description }}</p>
                            <hr class="spacer-15">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" name="qty" class="form-control" value="1">
                                </div><!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <h6><a href="/cart">{{ $item->qty }} in cart.</a></h6>
                                </div><!-- end col -->

                            </div><!-- end row -->
                            <hr class="spacer-15">

                            <ul class="list list-inline">
                                <li><button type="submit" class="btn btn-default btn-lg round"><i class="fa fa-shopping-basket mr-5"></i>Add to Cart</button></li>
                                <li><button type="button" class="btn btn-gray btn-lg round"><i class="fa fa-heart mr-5"></i>Add to Wishlist</button></li>
                                <li>Share this product: </li>
                                <li>
                                    <ul class="social-icons style1">
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- end col -->
                    </form>
                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>


<section class="section light-backgorund">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs style1 text-center" role="tablist">
                    {{-- <li role="presentation" ><a href="#additional_info" aria-controls="tab" role="tab" data-toggle="tab">Additional Info</a></li> --}}
                    <li role="presentation" class="active"><a href="#reviews" aria-controls="profile" role="tab" data-toggle="tab">Reviews ({{ $item->rating->count() }})</a></li>
                </ul><!-- end nav-tabs -->

                <!-- Tab panes -->
                <div class="tab-content">
                    {{-- <div role="tabpanel" class="tab-pane fade in active" id="additional_info">
                        <h5>Additional Info</h5>
                        <p>Vestibulum tellus justo, vulputate ac nunc eu, laoreet pellentesque erat.
                            Nulla in fringilla ex. Nulla finibus rutrum lorem vehicula facilisis.
                            Sed ornare congue mi, et volutpat diam. Suspendisse eget augue id magna placerat dignissim.
                            Fusce at turpis neque. Nullam commodo consequat risus et iaculis.
                        </p>

                        <hr class="spacer-15">

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <dl class="dl-horizontal">
                                    <dt>Dimensions</dt>
                                    <dd>120 x 75 x 90 cm</dd>
                                    <dt>Colors</dt>
                                    <dd>white, black, brown</dd>
                                    <dt>Materials</dt>
                                    <dd>cotton</dd>
                                </dl>
                            </div><!-- end col -->
                            <div class="col-sm-12 col-md-6">
                                <dl class="dl-horizontal">
                                    <dt>Weight</dt>
                                    <dd>1.65 kg</dd>
                                    <dt>Manufacturer</dt>
                                    <dd>Istanbul</dd>
                                </dl>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end tab-pane --> --}}
                    <div role="tabpanel" class="tab-pane active" id="reviews">

                        @include('component.reviews', ['reviews' => $item->rating, 'ratable' => $item])

                    </div><!-- end tab-pane -->
                </div><!-- end tab-content -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end section -->
