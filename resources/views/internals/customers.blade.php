@extends('layout')

@section('content')
    <h1>Customers</h1>

    <ul>
        <!-- Blade syntax simplifies the '<?php ?>' -->
        @foreach ($customers as $customer)
            <li>{{ $customer->name }} - {{ $customer->email }}</li>
        @endforeach
    </ul>

    <h1>Add Customer</h1>

    <form action="customers" method="POST">
        <input type="text" placeholder="Customer Name" name="name" id="name" value="{{ old('name') }}">
        <input type="text" placeholder="Customer E-mail" name="email" id="email" value="{{ old('email') }}">
        <button type="submit">Add</button>
        <!-- For security laravel only allows to pass data throug our form if we pass '@csrf', so laravel knows that you are really you passing data and not someone else -->
        @csrf
    </form>

    {{ $errors->first('name') }} <!-- Get the first error after returning from controller -->
    {{ $errors->first('email') }} <!-- Get the first error after returning from controller -->

@endsection
