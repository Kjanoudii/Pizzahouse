@extends('layouts.app')

@section('content')
  <div class="flex-center position-ref full-height">
    {{-- @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}

    <div class="content flex flex-col items-center">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create">Order a Pizza</a>
    </div>
</div>
@endsection