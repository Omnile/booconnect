@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.resturant', compact('resturant', 'items'))

		{!! $resturant->links() !!}

	</div>
@endsection
