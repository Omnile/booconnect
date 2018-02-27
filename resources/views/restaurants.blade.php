@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.restaurants')


		<div class="center-block">
			{!! $restaurants->links() !!}
		</div>

	</div>
@endsection
