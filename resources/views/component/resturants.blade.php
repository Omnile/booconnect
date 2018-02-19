@foreach ([1,2,3,4,5,6,7,8] as $resturant)
    <div class="col-sm-6 col-md-3">
        @include('component.resturant-card', ['some' => 'data'])
    </div><!-- end col -->
@endforeach
