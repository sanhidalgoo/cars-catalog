@extends('layout')

@section('title', $car->make)

@section('content')
    <h1>{{ $car->make }}</h1>

    <a href="{{ route('cars.edit', $car) }}">Edit</a>

    <form method="POST" action="{{ route('cars.destroy', $car) }}">
        @csrf @method('DELETE')
        <button>Delete</button>
    </form>


    <p><strong>Model: </strong>{{ $car->model }}</p>
@endsection
