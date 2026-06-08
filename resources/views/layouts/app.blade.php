@extends('layouts.base')

@section('childContent')

    @include('layouts.partials.navbar')

    <main class="flex-1">
        @yield('content')
    </main>

    <script>
        function toggleDropdown() {
            document.getElementById('nav-dropdown').classList.toggle('hidden');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function (e) {
            const dropdown = document.getElementById('nav-dropdown');
            const btn = e.target.closest('button[onclick="toggleDropdown()"]');
            if (!btn && !dropdown.classList.contains('hidden')) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
@endsection