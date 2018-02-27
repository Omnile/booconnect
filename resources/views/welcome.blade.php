@extends('layouts.explore')
@section('contents')
    <!-- start section -->
    <section class="section white-backgorund">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="title-wrap">
                        <h2 class="title">Browse Items</h2>
                        <p class="lead">Find meals from your favourite restaurants on BooConnect.</p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row column-4">
                @include('component.items', compact('items'))
            </div><!-- end row -->

            <button class="btn btn-primary center-block">Browse Meals and Items</button>
        </div><!-- end container -->
    </section>
    <!-- end section -->
    <section class="section light-backgorund">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-wrap">
                        <h2 class="title lines">Browse Restaurants</h2>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row column-4">
                @include('component.restaurants', compact('restaurants'))
            </div><!-- end row -->

            <button class="btn btn-primary center-block">Browse all restaurants</button>

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
