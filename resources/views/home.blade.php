@extends('layout')

@section('title', 'home')

@section('content')
    <div class="container">
        <h1 class="display-4">HOME</h1>
        @auth
            {{ auth()->user()->name }}
        @endauth
        <p class="lead text-secondary">This catalog of cars allows you to see models, makes and mileage. If you register on the page you can add, edit
            and delete cars in this catalog</p>
            <a class="btn btn-block btn-outline-primary" href="{{ route('register') }}">Sign Up</a>
    </div>
@endsection
