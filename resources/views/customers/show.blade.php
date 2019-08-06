@extends('layout')

@section('title', 'Customer Info')<!-- adding a title -->
{{--
    or
@section('title')
    Customers List
@endsection
--}}

@section('content')

<h1>Details for {{$customer->name}}</h1>
<a href="/public/customers/{{$customer->id}}/edit">Edit</a>
<div class="row">
    <div class="col-12">
        <p> <b>Name:</b> {{$customer->name}}</p>
        <p> <b>E-mail:</b> {{$customer->email}}</p>
        <p> <b>Company:</b> {{$customer->company->name}}</p>
    </div>
</div>

@endsection
