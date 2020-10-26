@extends('layout')

@section('title', 'contact')


@section('content')
    <h1 class="display-4">Contact</h1>
    <div class="container">
        <form class="bg-white shadow rounded py-3 px-4" method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control bg-light shadow-sm border-0" id="name" name="name" placeholder="Nombre..." value="{{ old('name') }}">
                {!! $errors->first('name', '<small>:message</small><br>') !!}
            </div>

            <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"> <br>
            {!! $errors->first('email', '<small>:message</small><br>') !!}

            <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"> <br>
            {!! $errors->first('subject', '<small>:message</small><br>') !!}

            <textarea name="content" placeholder="Mensaje">{{ old('content') }}</textarea> <br>
            {!! $errors->first('content', '<small>:message</small><br>') !!}

            <button class="btn btn-primary btn-block">Send</button>
        </form>
    </div>
@endsection
