@extends('layouts.app')

@section('title', 'Edit Details')<!-- adding a title -->
{{--
    or
@section('title')
    Customers List
@endsection
--}}

@section('content')

<h1>Edit Details for {{$customer->name}} </h1>

    {{-- <form action="/public/customers/{{$customer->id}}" method="POST"> --}}
        {{-- Using route and passing parameters to it, PS: Laravel is smart enough to get the ID when we use it route() --}}
    <form action="{{route('customers.update', ['customer' => $customer])}}" method="POST">
        @method('PATCH') {{-- Laravel knows browsers only accept POST or GET methods, so like this Laravel allows us to use the method PATCH or PUT --}}
        @include('customers.form')
        <button type="submit">Add</button>
    </form>

    {{ $errors->first('name') }} <!-- Get the first error after returning from controller -->
    {{ $errors->first('email') }} <!-- Get the first error after returning from controller -->
    {{ $errors->first('active') }} <!-- Get the first error after returning from controller -->
    {{ $errors->first('company_id') }} <!-- Get the first error after returning from controller -->

@endsection
