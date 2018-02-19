@foreach ([1,2,3,4,5,6,7,8] as $element)
	<div class="col-sm-6 col-md-3">
		@include('component.item-card', ['style' => array_random([1,2,3])])
	</div>
@endforeach
