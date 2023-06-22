@extends('layouts.main')
@section('content')
    @include('sections.User.index.section-1')
    <div class="index-sections-2">
        @include('sections.User.index.section-2')
        @yield('index-content')
    </div>
@endsection
