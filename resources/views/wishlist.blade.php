@extends('layouts.explore')

@section('contents')

	<div class="container">

		@include('component.wishlist', compact('items'))

		{!! $items->links() !!}
	</div>

@endsection
