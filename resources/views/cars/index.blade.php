@extends('layout')

@section('title', 'Catalog')


@section('content')
    <div class="container">
        <h1 class="display-4">Catalog</h1>

        @auth
            <a class="btn btn-primary" href="{{ route('cars.create') }}">Add Projects</a>
        @endauth

        <ul class="list-group">

            @forelse ($cars as $car)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="d-flex justify-content-between align-items-center" href=" {{ route('cars.show', $car) }}">
                        {{ $car->make }}
                        {{ $car->model }}
                    </a>
                </li>
            @empty
                <li>There are not cars to show</li>
            @endforelse
            {{ $cars->links() }}

        </ul>
    </div>
@endsection
