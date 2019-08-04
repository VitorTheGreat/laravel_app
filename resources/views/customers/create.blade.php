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
        <input type="text" placeholder="Customer Name" name="name" id="name" value="{{ old('name') }}">
        <input type="text" placeholder="Customer E-mail" name="email" id="email" value="{{ old('email') }}">
        <select name="active" id="active">
                <option value="" disabled selected>Select Customer Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
        </select>

        <select name="company_id" id="company_id">
            <option value="" disabled selected>Select Customer's Company</option>
            @foreach ($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
        </select>

        <button type="submit">Add</button>
        <!-- For security laravel only allows to pass data throug our form if we pass '@csrf', so laravel knows that you are really you passing data and not someone else -->
        @csrf
    </form>

    {{ $errors->first('name') }} <!-- Get the first error after returning from controller -->
    {{ $errors->first('email') }} <!-- Get the first error after returning from controller -->
    {{ $errors->first('active') }} <!-- Get the first error after returning from controller -->
    {{ $errors->first('company_id') }} <!-- Get the first error after returning from controller -->

@endsection