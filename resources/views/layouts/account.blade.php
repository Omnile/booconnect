@extends('layouts.explore')

@section('contents')
        <!-- start section -->
        <section class="section white-backgorund">
            <div class="container">
                <div class="row">
                    <!-- start sidebar -->
                    <div class="col-sm-3">
                        @include('component.sidebar')
                    </div><!-- end col -->
                    <!-- end sidebar -->

                    <div class="col-sm-9">
                        @yield('account-content')
                    </div>
                </div>            
            </div><!-- end container -->
        </section>
        <!-- end section -->
    @endsection