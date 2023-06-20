@php
    $currentPage = request()->input('page');
    $firstSectionGoods =  $goods->slice(0, 6);
    $SecondSectionGoods =  $goods->slice(6, 9);
    // dd($SecondSectionGoods);
@endphp

@extends('layouts.main')
@section('content')
    @include('sections.Good.index.section-1')
    @include('sections.Good.index.section-2', [$categories, $orderByCategories])
    @include('sections.Good.index.section-3', $firstSectionGoods)
    @if ($currentPage == 1)
        @include('sections.Good.index.section-4', $salesGoods)
    @endif
    @include('sections.Good.index.section-5', $SecondSectionGoods)
    @include('sections.Good.index.section-6')
    @stack('scripts')
@endsection
