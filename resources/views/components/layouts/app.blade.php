@extends('layouts.base')

@section('body')
    @yield('content')
    <main class="bg-primary text-white">
    @isset($slot)
        {{ $slot }}
    @endisset
    </main>
@endsection
