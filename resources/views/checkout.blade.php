@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.checkout')

		{!! $items->links() !!}
	</div>

@endsection
