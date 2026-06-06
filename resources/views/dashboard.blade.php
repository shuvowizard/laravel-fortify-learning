@extends('layouts.app')

@section('title', 'Dashboard')

@section('mainContent')
    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-3xl font-bold text-gray-900">
                    Welcome, {{ auth()->user()->name }}! 👋
                </h1>
                
                {{-- Logout Button --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center px-4 py-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors font-medium">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>

            <p class="text-gray-600 text-lg mb-6">
                You have successfully logged in. This is your dashboard. 
                From here, you can manage your profile and access other application features.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                {{-- Card 1 --}}
                <div class="bg-blue-50 p-6 rounded-xl border border-blue-100">
                    <h3 class="font-semibold text-blue-900 mb-2">Profile</h3>
                    <p class="text-sm text-blue-700">Update your personal information.</p>
                </div>
                
                {{-- Card 2 --}}
                <div class="bg-green-50 p-6 rounded-xl border border-green-100">
                    <h3 class="font-semibold text-green-900 mb-2">Security</h3>
                    <p class="text-sm text-green-700">Password and two-factor authentication.</p>
                </div>
                
                {{-- Card 3 --}}
                <div class="bg-purple-50 p-6 rounded-xl border border-purple-100">
                    <h3 class="font-semibold text-purple-900 mb-2">Sessions</h3>
                    <p class="text-sm text-purple-700">Manage your active browser sessions.</p>
                </div>
            </div>

        </div>
    </div>
@endsection