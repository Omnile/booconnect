<div class="col-md-12" style="height: 200px; background-image: url({{ $resturant->cover }}); background-size: cover; border-bottom-right-radius: 20%; border-bottom-left-radius: 30%;">

	<div class="col-md-3 col-sm-offset-1" style="box-shadow: all;">
		<img src="{{ $resturant->image }}">
	</div>

</div>

@include('component.items', compact('items', 'resturant'))
