@extends('layout')

@section('title', 'Customer List')

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

        <div class="form-group">
        <label for="active">Status</label>
        <select name="active" id="active" class="form-control">
            <option value="" disabled>Select customer status</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
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
    <div class="col-6">
    <h3>Active customers</h3>
    <ul>
        @foreach ($activeCustomers as $activeCustomers)
        <li>{{ $activeCustomers->name }} <span class="text-muted"> {{ $activeCustomers->email}}</span></li>
        @endforeach
    </ul>
    </div>
    <div class="col-6">
    <h3>Inactive customers</h3>
    <ul>
        @foreach ($inactiveCustomers as $inactiveCustomers)
        <li>{{ $inactiveCustomers->name }} <span class="text-muted"> {{ $inactiveCustomers->email}}</span></li>
        @endforeach
    </ul>
</div>
@endsection