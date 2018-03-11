
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Items</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Items</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="col-lg-10 offset-1">
                        <div class="card">
                            <div class="card-title">
                                <h4>Items </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product</th>
                                                <th>quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach()
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td><span>iBook</span></td>
                                                <td><span>456 pcs</span></td>
                                            </tr>
                                            @endforeach()

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
