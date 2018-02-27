@foreach ($restaurants as $restaurant)
    <div class="col-sm-6 col-md-3">
        @include('component.restaurant-card', ['some' => 'data'])
    </div><!-- end col -->
@endforeach
