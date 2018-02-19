@extends('layouts.app')

@section('content')

	@include('component.topbar')

	@include('component.middlebar')

	@include('component.navbar')

	@yield('contents')

	@include('component.footer')

	@include('component.item-modal', ['some' => 'data'])

@endsection
