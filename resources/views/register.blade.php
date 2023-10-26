@extends('layouts.main')

@section('container')
<form action="/register" method="POST">
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

    <button class="shadow border p-1" type="submit">Register</button>
</form>

<p>Or <a class="text-blue-400 underline" href="/login">Login</a> here<p>

@endsection