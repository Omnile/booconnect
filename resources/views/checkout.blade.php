@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.checkout', compact('items'))

	</div>

@endsection
