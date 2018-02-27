<div class="middleBar">
    <div class="container">
        <div class="row display-table">
            <div class="col-sm-3 vertical-align text-left hidden-xs">
                <a href="javascript:void(0);">
                    {{-- <img width="160" src="img/logo-big.png" alt=""> --}}
                    <h2>BooConnect</h2>
                </a>
            </div><!-- end col -->
            <div class="col-sm-7 vertical-align text-center">
                <form method="GET" action="/search">
                    <div class="row grid-space-1">
                        <div class="col-sm-6">
                            <input type="text" name="query" class="form-control input-lg" placeholder="Search" value="{{ request()->query('query') }}">
                        </div><!-- end col -->
                        <div class="col-sm-3">
                            <select class="form-control input-lg" name="type">
                                <option value="restaurants">Restaurants</option>
                                <option value="items">Items</option>
                            </select>
                        </div><!-- end col -->
                        <div class="col-sm-3">
                            <input type="submit" class="btn btn-default btn-block btn-lg" value="Search">
                        </div><!-- end col -->
                    </div><!-- end row -->
                </form>
            </div><!-- end col -->
            <div class="col-sm-2 vertical-align header-items hidden-xs">
                <div class="header-item mr-5">
                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist">
                        <i class="fa fa-heart-o"></i>
                        <sub>32</sub>
                    </a>
                </div>
            </div><!-- end col -->
        </div><!-- end  row -->
    </div><!-- end container -->
</div>
