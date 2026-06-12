@extends('layouts.base')

@section('title', 'Reset Password')

@section('childContent')
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md">

            <div class="text-center mb-8">
                <h1 class="text-2xl font-semibold text-gray-800">Reset Password</h1>
                <p class="text-sm text-gray-500 mt-1">Enter your new password below.</p>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 p-8">

                @if($errors->any())
                    <div class="mb-5 text-sm text-red-700 bg-red-50 border border-red-200 rounded-lg px-4 py-3">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="/reset-password">
                    @csrf

                    {{-- Fortify will inject the token here--}}
                    <input type="hidden" name="token" value="{{ request()->route('token') }}" />

                    <div class="mb-4">
                        <label class="block text-sm text-gray-600 mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email', $request->email) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-800
                                   focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" />
                        @if($errors->has('email'))
                            <p class="text-xs text-red-500 mt-1">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm text-gray-600 mb-1">New Password</label>
                        <input type="password" name="password" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-800
                                   focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" />
                        @if($errors->has('password'))
                            <p class="text-xs text-red-500 mt-1">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm text-gray-600 mb-1">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-800
                                   focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" />
                    </div>

                    <button type="submit" class="w-full bg-gray-900 text-white text-sm font-semibold py-2.5 rounded-lg
                               hover:bg-gray-700 transition">
                        Reset Password
                    </button>
                </form>

            </div>

            <p class="text-center text-sm text-gray-500 mt-6">
                Remember your password?
                <a href="/login" class="text-indigo-600 hover:underline">Back to login</a>
            </p>

        </div>
    </div>
@endsection