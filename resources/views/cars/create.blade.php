@extends('layout')

@section('title', 'Car Creation')


@section('content')
    <h1>Create a New Car Entrie</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('cars.store') }}">
        
        @include('cars._form', ['btnText' => 'Save'])

    </form>
@endsection
