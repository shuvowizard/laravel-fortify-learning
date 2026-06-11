@extends('layouts.base')

@section('childContent')

    @include('layouts.partials.navbar')

    <main class="flex-1">
        @yield('content')
    </main>

    @stack('scripts')

@endsection