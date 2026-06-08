@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="max-w-5xl mx-auto px-6 py-10">
        <h1 class="text-xl font-semibold text-gray-800 mb-6">Profile</h1>

        {{-- Success messages --}}
        @if(session('status') === 'profile-updated')
            <div class="mb-4 text-sm text-green-700 bg-green-50 border border-green-200 rounded-lg px-4 py-3">
                Profile updated successfully.
            </div>
        @endif

        @if(session('status') === 'password-updated')
            <div class="mb-4 text-sm text-green-700 bg-green-50 border border-green-200 rounded-lg px-4 py-3">
                Password updated successfully.
            </div>
        @endif

        {{-- Card 1: Profile Information --}}
        @include('profile.partials.update-profile-information-form')

        {{-- Card 2: Update Password --}}
        @include('profile.partials.update-password-form')

        {{-- Card 3: Delete Account --}}
        @include('profile.partials.delete-user-form')
    </div>
@endsection