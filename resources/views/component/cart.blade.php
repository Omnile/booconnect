
        <div class="row">
            <div class="col-sm-12 text-left">
                <h2 class="title">My Cart</h2>
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="spacer-5"><hr class="spacer-20 no-border">

        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="2">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th colspan="2">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                @include('component.cart-item', compact('item'))
                            @endforeach
                        </tbody>
                    </table><!-- end table -->
                </div><!-- end table-responsive -->

                <hr class="spacer-10 no-border">
                <a href="shop-sidebar-left.html" class="btn btn-light semi-circle btn-md pull-left" style="margin-bottom: 30px;">
                    <i class="/items"></i> Continue shopping
                </a>

                <a href="/checkout" class="btn btn-default semi-circle btn-md pull-right">
                    Checkout <i class="fa fa-arrow-right ml-5"></i>
                </a>
            </div><!-- end col -->
        </div><!-- end row -->
