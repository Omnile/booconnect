@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.cart', compact('items'))

		{!! $items->links() !!}
	</div>

@endsection
