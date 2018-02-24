@foreach ($resturants as $resturant)
    <div class="col-sm-6 col-md-3">
        @include('component.resturant-card', ['some' => 'data'])
    </div><!-- end col -->
@endforeach
