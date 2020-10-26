@extends('layout')

@section('title', $car->make)

@section('content')
    <div class="container">
        <div class="bg-white p-5 shadow rounded">
            <h1 class="display-4">{{ $car->make }}</h1>

            <p><strong>Model: </strong>{{ $car->model }}</p>
            <p><strong>Year: </strong>{{ $car->year }}</p>
            <p><strong>Mileage: </strong>{{ $car->mileage }}</p>

            @auth
                <div class="btn btn-group">
                    <a class="btn btn-primary" href="{{ route('cars.edit', $car) }}">Edit</a>

                    <form method="POST" action="{{ route('cars.destroy', $car) }}">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
@endsection
