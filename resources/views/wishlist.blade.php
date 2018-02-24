@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.wishlist')

		{!! $items->links() !!}
	</div>

@endsection
