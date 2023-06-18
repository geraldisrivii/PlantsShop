@extends('layouts.main')
@section('content')
    @include('sections.Good.show.section-1')
    @include('sections.Good.show.section-2', ['sameGoods' => $sameGoods])
    @include('sections.Good.show.section-3', ['reviews' => $reviews])
@endsection
@stack('scripts')
