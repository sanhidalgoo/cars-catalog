@extends('layout')

@section('title', 'contact')


@section('content')

    <div class="container">
        <form class="bg-white shadow rounded py-3 px-4" method="GET" action="{{ route('home') }}">
            <h1 class="display-4">Contact</h1>
            <hr>
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control bg-light shadow-sm border-0" id="name" name="name" placeholder="Nombre..."
                    value="{{ old('name') }}">
                {!! $errors->first('name', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control bg-light shadow-sm border-0" id="email" type="text" name="email"
                    placeholder="Email..." value="{{ old('email') }}"> <br>
                {!! $errors->first('email', '<small>:message</small><br>') !!}
            </div>

            <div class="fomer-group">
                <label for="subject">Subject</label>
                <input class="form-control bg-light shadow-sm border-0" id="subject" name="subject" placeholder="Subject..."
                    value="{{ old('subject') }}"> <br>
                {!! $errors->first('subject', '<small>:message</small><br>') !!}
            </div>

            <div class="former-group">
                <label for="message">Messae</label>
                <textarea class="form-control bg-light shadow-sm border-0" id="message" name="content" placeholder="Message">{{ old('content') }}</textarea> <br>
                {!! $errors->first('content', '<small>:message</small><br>') !!}
            </div>
            {{-- <button class="btn btn-primary btn-block">Send</button> --}}
        </form>
    </div>
@endsection
