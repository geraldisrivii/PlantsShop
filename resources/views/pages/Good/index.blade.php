@extends('layouts.main')
@section('content')
    @include('sections.Good.index.section-1')
    @include('sections.Good.index.section-2')
    @stack('scripts')
@endsection
