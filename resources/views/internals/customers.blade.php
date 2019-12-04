@extends('layout')

@section('content')
    <h1>Costumers</h1>
    <form action="customers" method="POST" class="pb-5">
        <div class="input-group">
        <input type="text" name="name">
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
        <li>{{ $customer->name }}</li>
        @endforeach
    </ul>
@endsection