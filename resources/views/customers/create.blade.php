@extends('layout')

@section('title', 'Add New Customers')<!-- adding a title -->
{{--
    or
@section('title')
    Customers List
@endsection
--}}

@section('content')

    <h1>Add a New Customer</h1>

    <form action="/public/customers" method="POST">
        @include('customers.form')
        <button type="submit">Add</button>
    </form>

    {{ $errors->first('name') }} <!-- Get the first error after returning from controller -->
    {{ $errors->first('email') }} <!-- Get the first error after returning from controller -->
    {{ $errors->first('active') }} <!-- Get the first error after returning from controller -->
    {{ $errors->first('company_id') }} <!-- Get the first error after returning from controller -->

@endsection
