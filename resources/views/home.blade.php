@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Dashboard</h1>

<p class="text-green-600 mb-4">Login berhasil 🎉</p>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="bg-red-500 text-white px-4 py-2 rounded">
        Logout
    </button>
</form>
@endsection
