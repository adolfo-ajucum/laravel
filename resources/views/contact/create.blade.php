@extends('layout')

@section('title', 'Contact us')

@section('content')
    <h1>Contact us</h1>

    <form action="/contact" method="POST">

        <label for="name">Name</label>
        <div class="form-group">
            <input type="text" name="name" value="{{old('name') }} " class="form-control">
        </div>

        <label for="email">Email</label>
        <div class="form-group">
            <input type="email" name="email" value="{{old('email') }}" class="form-control">
        </div>

        <label for="message">Message</label>
        <div class="form-group">
            <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
        </div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li style = "color:red">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @csrf
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection
