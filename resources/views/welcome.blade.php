@extends('layouts.explore')
@section('contents')
    <!-- start section -->
    <section class="section white-backgorund">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="title-wrap">
                        <h2 class="title">Browse Items</h2>
                        <p class="lead">Find meals from your favourite resturants on BooConnect.</p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row column-4">
                @include('component.items', ['some' => 'data'])
            </div><!-- end row -->

            <button class="btn btn-primary center-block">Browse Meals and Items</button>
        </div><!-- end container -->
    </section>
    <!-- end section -->
<!-- start section -->
    <section>
        <div class="container">
            <!-- Modal Product Quick View -->
            <div class="modal fade productQuickView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h5>Lorem ipsum dolar sit amet</h5>
                        </div><!-- end modal-header -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class='carousel slide product-slider' data-ride='carousel' data-interval="false">
                                        <div class='carousel-inner'>
                                            <div class='item active'>
                                                <figure>
                                                    <img src='https://notesfornextyear.files.wordpress.com/2012/11/a-great-meal.jpg?w=2400' alt='' />
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
                                        <ol class='carousel-indicators mCustomScrollbar meartlab'>
                                            <li data-target='.product-slider' data-slide-to='0' class='active'><img src='https://notesfornextyear.files.wordpress.com/2012/11/a-great-meal.jpg?w=100' alt='' /></li>
                                        </ol><!-- end carousel-indicators -->
                                    </div><!-- end carousel -->
                                </div><!-- end col -->
                                <div class="col-sm-7">
                                    <p class="text-gray alt-font">Item ID: 101</p>

                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star-half-o text-warning"></i>
                                    <span>(12 reviews)</span>
                                    <h4 class="text-primary">GHC79.00</h4>
                                    <p>The best meal you'l get today. We promise!.</p>
                                    <hr class="spacer-10">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <select class="form-control" name="select">
                                                <option value="" selected>Color</option>
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                                <option value="blue">Blue</option>
                                            </select>
                                        </div><!-- end col -->
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <select class="form-control" name="select">
                                                <option value="">Size</option>
                                                <option value="">S</option>
                                                <option value="">M</option>
                                                <option value="">L</option>
                                                <option value="">XL</option>
                                                <option value="">XXL</option>
                                            </select>
                                        </div><!-- end col -->
                                        <div class="col-md-4 col-sm-12">
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
                                    <hr class="spacer-10">
                                    <ul class="list list-inline">
                                        <li><button type="button" class="btn btn-default btn-md round"><i class="fa fa-shopping-basket mr-5"></i>Add to Cart</button></li>
                                        <li><button type="button" class="btn btn-gray btn-md round"><i class="fa fa-heart mr-5"></i>Add to Wishlist</button></li>
                                    </ul>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end modal-body -->
                    </div><!-- end modal-content -->
                </div><!-- end modal-dialog -->
            </div><!-- end productRewiew -->
        </div><!-- end container -->
    </section>
    <!-- start section -->
    <section class="section light-backgorund">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-wrap">
                        <h2 class="title lines">Browse Resturants</h2>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row column-4">
                @include('component.resturants', ['some' => 'data'])
            </div><!-- end row -->

            <button class="btn btn-primary center-block">Browse all resturants</button>

        </div><!-- end container -->
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section">
        <div class="container">
            <div id="owl-demo" class="owl-carousel column-5 owl-theme">
                <div class="item">
                    <figure class="zoom-out">
                        <img src="/img/brands/brand_01.jpg" alt="">
                    </figure>
                </div><!-- end item -->
                <div class="item">
                    <figure class="zoom-out">
                        <img src="/img/brands/brand_02.jpg" alt="">
                    </figure>
                </div><!-- end item -->
                <div class="item">
                    <figure class="zoom-out">
                        <img src="/img/brands/brand_03.jpg" alt="">
                    </figure>
                </div><!-- end item -->
                <div class="item">
                    <figure class="zoom-out">
                        <img src="/img/brands/brand_04.jpg" alt="">
                    </figure>
                </div><!-- end item -->
                <div class="item">
                    <figure class="zoom-out">
                        <img src="/img/brands/brand_01.jpg" alt="">
                    </figure>
                </div><!-- end item -->
                <div class="item">
                    <figure class="zoom-out">
                        <img src="/img/brands/brand_02.jpg" alt="">
                    </figure>
                </div><!-- end item -->
                <div class="item">
                    <figure class="zoom-out">
                        <img src="/img/brands/brand_03.jpg" alt="">
                    </figure>
                </div><!-- end item -->
                <div class="item">
                    <figure class="zoom-out">
                        <img src="/img/brands/brand_04.jpg" alt="">
                    </figure>
                </div><!-- end item -->
            </div><!-- end owl carousel -->
        </div><!-- end container -->
    </section>
    <!-- end section -->
@endsection
