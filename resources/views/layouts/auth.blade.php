@extends('layouts.app')

@include('component.topBar')

<section class="section white-backgorund">
    <div class="container">
        <div class="row">
            <!-- start sidebar -->
            <div class="col-sm-3">
                <div class="widget">
                    <figure>
                        <a href="javascript:void(0);" class="logo">
                            <img src="http://via.placeholder.com/100x200&text=BooConnect+Logo">
                        </a>
                    </figure>
                </div><!-- end widget -->
            </div><!-- end col -->
            <!-- end sidebar -->
            <div class="col-sm-9">


                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h2 class="title">@yield('auth-title')</h2>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="spacer-5"><hr class="spacer-20 no-border">

                @yield('auth-form')

            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@include('component.footer')
