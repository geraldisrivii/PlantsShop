@php
    $secondSectionGoods = $salesGoods->slice(0, 3);
    $fourthSectionGoods = $salesGoods->slice(3, 9);
@endphp

@extends('layouts.main')
@section('content')
    @include('sections.Good.sales.section-1')
    @include('sections.Good.sales.section-2', $secondSectionGoods)
    @include('sections.Good.sales.section-3')
    @include('sections.Good.sales.section-4', $fourthSectionGoods)
    @include('sections.Good.sales.section-5')
@endsection
