@extends('layout')

@section('title', $car->make)

@section('content')
    <h1>{{ $car->make }}</h1>

    @auth
        <a href="{{ route('cars.edit', $car) }}">Edit</a>

        <form method="POST" action="{{ route('cars.destroy', $car) }}">
            @csrf @method('DELETE')
            <button>Delete</button>
        </form>
    @endauth

    <p><strong>Model: </strong>{{ $car->model }}</p>
    <p><strong>Year: </strong>{{ $car->year }}</p>
    <p><strong>Mileage: </strong>{{ $car->mileage }}</p>
@endsection
