
        <div class="row">
            <div class="col-sm-12 text-left">
                <h2 class="title">Invoices</h2>
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="spacer-5"><hr class="spacer-20 no-border">

        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th colspan="2">Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(collect([1,2,3,4]) as $something)
                            <tr>
                                <th scope="row">1</th>
                                <td>Ordered a lot yummy food from fav restaurant !</td>
                                <td class="text-primary">Paid</td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table><!-- end table -->
                </div><!-- end table-responsive -->
            </div><!-- end col -->
        </div><!-- end row -->
