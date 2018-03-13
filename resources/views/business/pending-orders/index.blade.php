@extends('business.layout')

@section('contents')

        @include('business.component.pending-orders', compact('orders'))

@endsection
