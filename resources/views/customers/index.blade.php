@extends('layout')

@section('title', 'Customer List')

@section('content')
    <div class="row">
        <div class="col-12">
        <h1>Costumers</h1>
            <p><a href="customers/create">New customer</a></p>
        </div>
    </div>
<div class="row">
    <div class="col-6">
    <h3>Active customers</h3>
    <ul>
        @foreach ($activeCustomers as $activeCustomers)
        <li>{{ $activeCustomers->name }} <span class="text-muted"> {{ $activeCustomers->company->name}}</span></li>
        @endforeach
    </ul>
    </div>
    <div class="col-6">
    <h3>Inactive customers</h3>
    <ul>
        @foreach ($inactiveCustomers as $inactiveCustomers)
        <li>{{ $inactiveCustomers->name }} <span class="text-muted"> {{ $inactiveCustomers->company->name}}</span></li>
        @endforeach
    </ul>
</div>
@endsection
