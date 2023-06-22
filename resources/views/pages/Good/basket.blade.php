@extends('layouts.main')
@section('content')
    @include('sections.Good.basket.section-1')
    @include('sections.Good.basket.section-2', $basketItems)
    @stack('scripts')
@endsection
