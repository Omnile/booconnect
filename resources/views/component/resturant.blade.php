<div class="row" style="height: 150px; background-image: url({{ $resturant->cover }}); background-size: cover; border-bottom-right-radius: 100%; border-bottom-left-radius: 100%;">
</div>
<br>
<div class="row">
		<img src="{{ $resturant->image }}"
	style="
		box-shadow: -1px 4px 120px 20px rgba(0,0,0,1);
		border-radius: 20px;
		display: block;
		margin: auto;
	">
	</div>

<div class="row text-center">
	<h2 >{{ $resturant->name }}</h2>
	<p>{{ $resturant->description }}</p>
</div>

<hr>
<div class="row">
	@include('component.items', compact('items', 'resturant'))
</div>
