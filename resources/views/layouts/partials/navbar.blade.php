    {{-- Navbar --}}
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-5xl mx-auto px-6 h-14 flex items-center justify-between">

            {{-- Logo --}}
            <a href="{{ route('dashboard') }}" class="flex items-center gap-2 text-gray-800 font-medium">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25" />
                </svg>
                Dashboard
            </a>

            {{-- Right side: user dropdown --}}
            <div class="relative">
                <button onclick="toggleDropdown()"
                    class="flex items-center gap-2 text-sm text-gray-700 hover:text-gray-900 focus:outline-none">
                    {{ auth()->user()->name }}
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                {{-- Dropdown menu --}}
                <div id="nav-dropdown"
                    class="hidden absolute right-0 mt-2 w-44 bg-white border border-gray-200
                           rounded-xl shadow-sm z-50 overflow-hidden">

                    <a href="{{ route('profile.edit') }}"
                        class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        Profile
                    </a>

                    <hr class="border-gray-100">

                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit"
                            class="flex items-center gap-2 w-full px-4 py-2.5 text-sm text-gray-700
                                   hover:bg-gray-50 text-left">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                            Log out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>