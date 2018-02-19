@extends('layouts.explore')

@section('contents')

	<div class="container">
		@include('component.resturants')


		<div class="center-block">
			{!! $resturants->links() !!}
		</div>

	</div>




@endsection
