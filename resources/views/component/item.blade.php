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
                    <div class="col-sm-12">
                        <p>{{ $item->description }}</p>
                        {{-- <ul class="list alt-list">
                            <li><i class="fa fa-check"></i> Lorem Ipsum dolor sit amet</li>
                            <li><i class="fa fa-check"></i> Cras aliquet venenatis sapien fringilla.</li>
                            <li><i class="fa fa-check"></i> Duis luctus erat vel pharetra aliquet.</li>
                        </ul> --}}
                        <hr class="spacer-15">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="" selected>Color</option>
                                    <option value="red">Red</option>
                                    <option value="green">Green</option>
                                    <option value="blue">Blue</option>
                                </select>
                            </div><!-- end col -->
                            {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="">Size</option>
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                    <option value="">XL</option>
                                    <option value="">XXL</option>
                                </select>
                            </div><!-- end col --> --}}
                            <div class="col-md-6 col-sm-12">
                                <select class="form-control" name="select">
                                    <option value="" selected>QTY</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                </select>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <hr class="spacer-15">

                        <ul class="list list-inline">
                            <li><button type="button" class="btn btn-default btn-lg round"><i class="fa fa-shopping-basket mr-5"></i>Add to Cart</button></li>
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
                    {{-- <li role="presentation" class="active"><a href="#additional_info" aria-controls="tab" role="tab" data-toggle="tab">Additional Info</a></li> --}}
                    <li role="presentation" class="active"><a href="#reviews" aria-controls="profile" role="tab" data-toggle="tab">Reviews (4)</a></li>
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
                    <div role="tabpanel" class="tab-pane fade" id="reviews">

                        @include('component.review', ['some' => 'data'])

                    </div><!-- end tab-pane -->
                </div><!-- end tab-content -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end section -->
