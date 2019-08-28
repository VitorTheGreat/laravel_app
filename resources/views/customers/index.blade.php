@extends('layouts.app')

@section('title', 'Customers List')<!-- adding a title -->
{{--
    or
@section('title')
    Customers List
@endsection
--}}

@section('content')
    <h1>Customers</h1>

    @foreach ($customers as $customer)
        <div class="row">
            <div class="col-2"> {{$customer->id}} </div>
        <div class="col-4"><a href="/customers/{{$customer->id}}">{{$customer->name}}</a></div>
            <div class="col-4"> {{$customer->company->name}} </div>
            <div class="col-2"> {{$customer->active }} </div>
            {{-- <div class="col-2"> {{$customer->active ? 'Active' : 'Inactive'}} </div> --}} {{--* Ternary If: if it is true Show the first option, if it is false, show the second Action --}}
        </div>
    @endforeach

<hr>
    <div class="row">
        <div class="col-12">
            <h2>Companies and their Customers</h2>
            @foreach ($companies as $company)
                <h3> {{$company->name}} </h3>

                <ul>
                    @foreach ($company->customers as $ccustomers)
                        <li> {{ $ccustomers->name }} </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>

@endsection
