@extends('layout')

@section('content')
    <h1>Costumers</h1>
    <form action="customers" method="POST" class="pb-5">
        <p>Name: </p>
        <div class="input-group pb-2">
        <input type="text" name="name" value={{old('name')}}>
        </div>  

        <p>Email: </p>
        <div class="input-group pb-2">
        <input type="email" name="email" value={{old('email')}}>
        </div>
        @if ($errors->any())
          <ul>
              @foreach ($errors->all() as $error)
                  <li style = "color:red">{{ $error }}</li>
              @endforeach
          </ul>
        @endif
        <button type="submit">Add Customer</button>

        @csrf
    </form>

    <ul>
        @foreach ($customers as $customer)
        <li>{{ $customer->name }} <span class="text-muted"> {{ $customer->email}}</span></li>
        @endforeach
    </ul>
@endsection