
        <div class="row">
            <div class="col-sm-12 text-left">
                <h2 class="title">Invoice</h2>
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
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-6">
                <h5 class="thin subtitle">Choose a Payment Method</h5>
                <div class="panel-group accordion style2" id="accordionPayment" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div id="collapsePayment1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingPayment1">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-4"> Mobile Money Merchant <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option value="mtn">MTN</option>
                                                <option value="tigo">Tigo</option>
                                                <option value="vodafone">Vodafone</option>
                                                <option value="airtel">Airtel</option>
                                            </select>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-4">Mobile Money Number <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control required" name="mobilenumber" placeholder="">
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-offset-4 col-sm-8 text-right">
                                            <a href="/#" class="btn btn-default btn-md round">Order <i class="fa fa-arrow-circle-right ml-5"></i></a>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end form-group -->
                            </div><!-- end panel-body -->
                        </div><!-- end collapse -->
                    </div><!-- end panel -->
                </div><!-- end panel-group -->
            </div><!-- end col -->

            <div class="col-md-5">
                <div class="table-responsive">
                    <table class="table no-border">
                        <tbody><tr>
                            <th>Order Subtotal</th>
                            <td>$ 98,00</td>
                        </tr>
                        <tr>
                            <th>Delivery</th>
                            <td>$ 0,00</td>
                        </tr>
                        <tr>
                            <th>Order Total</th>
                            <td>$ 98,00</td>
                        </tr>
                    </tbody></table><!-- end table -->
                </div><!-- end table-responsive -->
            </div><!-- end col -->
        </div><!-- end row -->
