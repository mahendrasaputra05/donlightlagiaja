@extends('layouts.auth')

@section('content')
<div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
    <p class="text-center text-gray-500 mb-4">
        Sign in to continue your sweet journey
    </p>

    {{-- Tabs --}}
    <div class="flex mb-6 bg-gray-100 rounded-full p-1">
        <a href="{{ route('login') }}"
           class="w-1/2 text-center py-2 rounded-full text-gray-600">
            sign in
        </a>
        <a href="{{ route('register') }}"
           class="w-1/2 text-center py-2 rounded-full bg-gradient-to-r from-pink-400 to-teal-400 text-white">
            sign up
        </a>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
            <label class="text-sm text-gray-600">Full Name</label>
            <input type="text" name="name"
                   class="w-full mt-1 px-4 py-3 border rounded-xl"
                   placeholder="Enter your full name">
        </div>

        <div>
            <label class="text-sm text-gray-600">Email Address</label>
            <input type="email" name="email"
                   class="w-full mt-1 px-4 py-3 border rounded-xl"
                   placeholder="Enter your email">
        </div>

        <div>
            <label class="text-sm text-gray-600">Password</label>
            <input type="password" name="password"
                   class="w-full mt-1 px-4 py-3 border rounded-xl"
                   placeholder="Enter your password">
        </div>

        <div>
            <label class="text-sm text-gray-600">Confirm Password</label>
            <input type="password" name="password_confirmation"
                   class="w-full mt-1 px-4 py-3 border rounded-xl"
                   placeholder="Confirm your password">
        </div>

        <button type="submit"
                class="w-full py-3 bg-gradient-to-r from-pink-400 to-teal-400 text-white rounded-xl shadow-lg text-lg">
            → Create Account
        </button>
    </form>
</div>
@endsection
