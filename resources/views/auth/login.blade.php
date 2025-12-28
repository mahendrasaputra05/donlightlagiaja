@extends('layouts.auth')

@section('content')
<div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
    <h1 class="text-3xl font-semibold text-center mb-2">
        Welcome to <span class="bg-gradient-to-r from-pink-500 to-teal-400 bg-clip-text text-transparent">Donlight</span>
    </h1>
    <p class="text-center text-gray-500 mb-6">
        Sign in to continue your sweet journey
    </p>

    {{-- Tabs --}}
    <div class="flex mb-6 bg-gray-100 rounded-full p-1">
        <a href="{{ route('login') }}"
           class="w-1/2 text-center py-2 rounded-full bg-gradient-to-r from-pink-400 to-teal-400 text-white">
            sign in
        </a>
        <a href="{{ route('register') }}"
           class="w-1/2 text-center py-2 rounded-full text-gray-600">
            sign up
        </a>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <label class="text-sm text-gray-600">Email Address</label>
            <input type="email" name="email"
                   class="w-full mt-1 px-4 py-3 border rounded-xl focus:ring focus:ring-pink-200"
                   placeholder="Enter your email">
        </div>

        <div>
            <label class="text-sm text-gray-600">Password</label>
            <input type="password" name="password"
                   class="w-full mt-1 px-4 py-3 border rounded-xl focus:ring focus:ring-pink-200"
                   placeholder="Enter your password">
            <div class="text-right mt-1">
                <a href="#" class="text-xs text-pink-400">Forgot Password?</a>
            </div>
        </div>

        <button type="submit"
                class="w-full py-3 mt-4 bg-gradient-to-r from-pink-400 to-teal-400 text-white rounded-xl shadow-lg text-lg">
            → Sign in
        </button>
    </form>
</div>
@endsection
