@extends('business.layout')

@section('contents')

        @include('business.component.completed-orders', compact('orders'))

@endsection
