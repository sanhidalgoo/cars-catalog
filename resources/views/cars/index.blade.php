@extends('layout')

@section('title', 'Catalog')


@section('content')
    <h1>Catalog</h1>

    @auth
        <a href="{{ route('cars.create') }}">Add Projects</a>
    @endauth

    <ul>

        @forelse ($cars as $car)
            <li><a href=" {{ route('cars.show', $car) }}">{{ $car->make }}</a> </li>
        @empty
            <li>There are not cars to show</li>
        @endforelse
        {{ $cars->links() }}

    </ul>
@endsection
