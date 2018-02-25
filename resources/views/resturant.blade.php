@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.resturant', compact('resturant', 'items'))

	</div>
@endsection
