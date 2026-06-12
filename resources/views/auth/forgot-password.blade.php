@extends('layouts.base')

@section('title', 'Forgot Password')

@section('childContent')
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md">

            <div class="text-center mb-8">
                <h1 class="text-2xl font-semibold text-gray-800">Forgot Password</h1>
                <p class="text-sm text-gray-500 mt-1">Enter your email and we'll send you a reset link.</p>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 p-8">

                @if(session('status'))
                    <div class="mb-5 text-sm text-green-700 bg-green-50 border border-green-200 rounded-lg px-4 py-3">
                        {{ session('status') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-5 text-sm text-red-700 bg-red-50 border border-red-200 rounded-lg px-4 py-3">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="/forgot-password">
                    @csrf

                    <div class="mb-6">
                        <label class="block text-sm text-gray-600 mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-800
                                   focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent" />
                        @if($errors->has('email'))
                            <p class="text-xs text-red-500 mt-1">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <button type="submit" class="w-full bg-gray-900 text-white text-sm font-semibold py-2.5 rounded-lg
                               hover:bg-gray-700 transition">
                        Send Reset Link
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