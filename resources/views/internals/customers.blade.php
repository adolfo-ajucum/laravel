@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Costumers</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
        <form action="customers" method="POST">
        <label for="name">Name</label>
        <div class="form-group">
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        </div>  

        <label for="email">Email</label>
        <div class="form-group">
        <input type="email" name="email" value="{{old('email')}}" class="form-control">
        </div>
        @if ($errors->any())
          <ul>
              @foreach ($errors->all() as $error)
                  <li style = "color:red">{{ $error }}</li>
              @endforeach
          </ul>
        @endif
        <button type="submit" class="btn btn-primary">Add Customer</button>

        @csrf
    </form>
        </div>
    </div>
<hr>
<div class="row">
    <div class="col-12">
    <ul>
        @foreach ($customers as $customer)
        <li>{{ $customer->name }} <span class="text-muted"> {{ $customer->email}}</span></li>
        @endforeach
    </ul>
    </div>
</div>
@endsection