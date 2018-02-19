@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.items')

		{!! $items->links() !!}
	</div>

@endsection
