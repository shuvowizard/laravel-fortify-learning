@extends('layouts.base')

@section('title', 'Login')

@section('childContent')
    <div class="flex-1 flex items-center justify-center p-4 mt-10">
        <div class="bg-white w-full max-w-md rounded-2xl shadow-xl border border-gray-100 p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Welcome Back</h1>
                <p class="text-gray-500 mt-2 text-sm">Sign in to your account</p>
            </div>

            <form id="loginForm" action="{{ route('login.store') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" autofocus
                        class="w-full px-4 py-2.5 bg-gray-50 border rounded-lg focus:ring-2 outline-none transition-all duration-200 
                        @error('email') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-gray-300 focus:ring-blue-500 focus:border-blue-500 @enderror">
                    
                    @error('email')
                        <p class="error-message text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" 
                        class="w-full px-4 py-2.5 bg-gray-50 border rounded-lg focus:ring-2 outline-none transition-all duration-200 
                        @error('password') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-gray-300 focus:ring-blue-500 focus:border-blue-500 @enderror">
                    
                    @error('password')
                        <p class="error-message text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" 
                            class="w-4 h-4 text-blue-600 bg-gray-50 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-500 hover:underline">
                        Forgot password?
                    </a>                
                </div>

                <!-- Submit Button -->
                <button type="submit" id="submitBtn" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 rounded-lg shadow-md transition-all duration-200">
                    Sign In
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:underline">Sign up</a>
                </p>
            </div>
        </div>
    </div>
@endsection