<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
    <h3 class="text-primary">Create Item</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Create Item</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-lg-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="basic-elements">
                        <form method="POST" action="/items"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="product name" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Price ({{ config('booconnect.currency') }})</label>
                                        <input type="number" class="form-control" placeholder="product price" name="price" value="{{ old('price') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="8" placeholder="description" style="width: 100%; height: 100%;" name="description">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" value="image" name="image">
                                    </div>

                                    <div class="form-group">
                                        <label>Measurement</label>
                                        <select class="form-control" name="measurement">
                                            <option value="N\A">N\A</option>
                                            <option value="plate">Plate</option>
                                            <option value="bowl">Bowl</option>
                                            <option value="cup">Cup</option>
                                            <option value="bottle">Bottle</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Quantity daily</label>
                                        <input type="number" class="form-control" placeholder="product daily quantity" name="quantity" value="{{ old('quantity') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Add Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# column -->
    </div>
    <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
