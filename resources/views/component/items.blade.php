@foreach ($items as $item)
	<div class="col-sm-6 col-md-3">
		@include('component.item-card', ['style' => array_random([1,2,3]), compact('item')])
	</div>
@endforeach
