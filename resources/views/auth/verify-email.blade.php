@extends('layouts.base')

@section('title', 'Verify Email')

@section('childContent')
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md">

            <div class="text-center mb-8">
                <h1 class="text-2xl font-semibold text-gray-800">Verify Your Email</h1>
                <p class="text-sm text-gray-500 mt-1">Please verify your email address to continue.</p>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 p-8">

                <p class="text-sm text-gray-600 mb-6">
                    Thanks for signing up! Before getting started, could you verify your email address
                    by clicking on the link we just emailed to you? If you didn't receive the email,
                    we will gladly send you another.
                </p>

                @if(session('status') === 'verification-link-sent')
                    <div class="mb-5 text-sm text-green-700 bg-green-50 border border-green-200 rounded-lg px-4 py-3">
                        A new verification link has been sent to your email address.
                    </div>
                @endif

                {{-- Resend verification email --}}
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="w-full bg-gray-900 text-white text-sm font-semibold py-2.5 rounded-lg
                               hover:bg-gray-700 transition">
                        Resend Verification Email
                    </button>
                </form>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}" class="mt-3">
                    @csrf
                    <button type="submit" class="w-full border border-gray-300 text-gray-700 text-sm font-medium py-2.5
                               rounded-lg hover:bg-gray-50 transition">
                        Log out
                    </button>
                </form>

            </div>

        </div>
    </div>
@endsection