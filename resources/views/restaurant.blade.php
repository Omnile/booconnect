@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.restaurant', compact('restaurant'))

	</div>
@endsection
