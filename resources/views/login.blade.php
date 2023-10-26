@extends('layouts.main')

@section('container')
@if(session()->has('registerSuccess'))
<div class="text-green-600">
    {{ session('registerSuccess') }}
</div>
@endif

@if(session()->has('loginError'))
<div class="text-red-400">
    {{ session('loginError') }}
</div>
@endif

<form action="/login" method="POST">
    @csrf
    @error('username')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="username">Username</label>
    <input class="p-1 border" type="text" name="username" id="username">

    <br>

    @error('password')
    <span class="text-red-400">{{ $message }}</span><br>
    @enderror
    <label for="password">Password</label>
    <input class="p-1 border" type="password" name="password" id="password">

    <br>

    <button class="shadow border p-1" type="submit">Login</button>
</form>

<p>Or <a class="text-blue-400 underline" href="/register">Register</a> here<p>
@endsection