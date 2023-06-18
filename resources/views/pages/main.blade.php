@extends('layouts.main')
@section('content')
    @include('sections.main.section-1')
    @include('sections.main.section-2')
    @include('sections.main.section-3')
    @include('sections.main.section-4', $goods)
    @include('sections.main.section-5')
@endsection
