@extends('layout')

@section('title', 'Edit Car Entrie')


@section('content')
    <div class="container">

        @include('partials.validation-errors')

        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('cars.update', $car) }}">
            <h1 class="display-4">Edit Car Entrie</h1>
            <hr>
            @method('PATCH')

            @include('cars._form', ['btnText' => 'Update'])

        </form>
    </div>
@endsection
