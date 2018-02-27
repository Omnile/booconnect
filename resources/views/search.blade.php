@extends('layouts.explore')
@section('contents')
    <!-- start section -->
    @if ($type == 'items' && $result->count())
        <section class="section white-backgorund">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="title-wrap">
                            <h2 class="title">Here are some meals matching your search</h2>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row column-4">
                    @include('component.items', ['items' => $result])
                </div><!-- end row -->

                {!! $result->links() !!}
            </div><!-- end container -->
        </section>
        <!-- end section -->

    @elseif($type == 'restaurants' && $result->count())

    <section class="section light-backgorund">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-wrap">
                        <h2 class="title lines">Here are some restaurants matching your search</h2>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row column-4">
                @include('component.restaurants',  ['restaurants' => $result])
            </div><!-- end row -->

            {!! $result->links() !!}

        </div><!-- end container -->
    </section>
    <!-- end section -->

    @else
        <section class="section light-backgorund">
            <h1 class="text-center">No match found.</h1>
        </section>
    @endif

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
