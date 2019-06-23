@extends('layout')

@section('content')
    <h1>Customers</h1>

    <ul>
        <!-- Blade syntax simplifies the '<?php ?>' -->
        @foreach ($customers as $customer)
            <li>{{$customer}}</li>
        @endforeach
    </ul>
@endsection