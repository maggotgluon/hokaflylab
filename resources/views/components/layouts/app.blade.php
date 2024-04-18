@extends('layouts.base')

@section('body')
<div class="absolute top-1 right-1 hidden">
    @auth
    <x-button :href="route('home')" label="Home"/>

    <x-button :href="route('logout')" label="sign out"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"/>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @else
    <x-button :href="route('login')" label="Log in"/>
        @if (Route::has('register'))
        <x-button :href="route('register')" label="Register"/>
        @endif
    @endauth
</div>
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
