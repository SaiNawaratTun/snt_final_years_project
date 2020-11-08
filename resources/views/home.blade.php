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

    <div class="content">
        <div class="title m-b-md">
            SNT Blood Donation
        </div>

        <div class="links">
            <a href="/home">Home</a>
            <a href="/form">Blood</a>
            <a href="/food">Refreshments</a>
            <a href="/item">Covid-19</a>
            <a href="/feedback">Feedback</a>
            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection
