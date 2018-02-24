@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.orders', compact('items'))

		{!! $items->links() !!}
	</div>
@endsection
