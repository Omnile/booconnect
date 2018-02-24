
    <div class="col-sm-9">
        <div class="row">
            <div class="col-sm-12 text-left">
                <h2 class="title">My Order</h2>
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="spacer-5"><hr class="spacer-20 no-border">

        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th colspan="2">Products</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('component.orders-item')
                        </tbody>
                    </table><!-- end table -->
                </div><!-- end table-responsive -->

                <hr class="spacer-10 no-border">

                <a href="/checkout" class="btn btn-light semi-circle btn-md">
                    <i class="fa fa-arrow-left mr-5"></i> Shopping
                </a>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end col -->
