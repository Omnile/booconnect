
    <div class="row">
        <div class="col-sm-12 text-left">
            <h2 class="title">My Wishlist</h2>
        </div><!-- end col -->
    </div><!-- end row -->

    <hr class="spacer-5"><hr class="spacer-20 no-border">

    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        @foreach ($items as $item)
                            @include('component.wish-item', compact('item'))
                        @endforeach
                    </tbody>
                </table><!-- end table -->
            </div><!-- end table-responsive -->

            <hr class="spacer-10 no-border">

            <a href="shop-sidebar-left.html" class="btn btn-light semi-circle btn-md">
                <i class="fa fa-arrow-left mr-5"></i> Continue shopping
            </a>
        </div><!-- end col -->
    </div><!-- end row -->
