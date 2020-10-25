@extends('layout')

@section('title', 'Edit Car Entrie')


@section('content')
    <h1>Edit Car Entrie</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('cars.update', $car) }}">
        @method('PATCH')

        @include('cars._form', ['btnText' => 'Update'])

    </form>
@endsection