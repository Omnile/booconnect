@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.cart', compact('items'))

	</div>

@endsection
