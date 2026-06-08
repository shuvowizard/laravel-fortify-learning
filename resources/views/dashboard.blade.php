@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-5xl mx-auto px-6 py-10">
        <h1 class="text-xl font-semibold text-gray-800 mb-6">Dashboard</h1>

        <div class="bg-white rounded-xl border border-gray-200 p-6 flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center
                        text-indigo-600 font-semibold text-lg">
                {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
            </div>
            <div>
                <p class="font-medium text-gray-900">Welcome back, {{ auth()->user()->name }}!</p>
                <p class="text-sm text-gray-500">{{ auth()->user()->email }}</p>
            </div>
        </div>
    </div>
@endsection