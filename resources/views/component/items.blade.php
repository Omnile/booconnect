<div class="row">
	@foreach ($items as $item)
		<div class="col-sm-6 col-md-3">
			@include('component.item-card', ['style' => 3, compact('item')])
		</div>
	@endforeach
</div>
