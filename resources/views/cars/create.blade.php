@extends('layout')

@section('title', 'Car Creation')


@section('content')
    <div class="container">


        @include('partials.validation-errors')

        <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('cars.store') }}">
            <h1 class="display-4">Create a New Car Entrie</h1>
            <hr>
            @include('cars._form', ['btnText' => 'Save'])

        </form>
    </div>
@endsection
