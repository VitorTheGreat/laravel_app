@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')

<h1>Contact Us</h1>

{{-- naming the route like this, using route helper, we do not need to change every single route if we change them in web.php(see web.php, we NAMED the routes) --}}
<form action="{{route('contact.store')}}" method="post">
    <input type="text" placeholder="Customer Name" name="name" id="name" value="{{ old('name') }}">
    <input type="text" placeholder="Customer E-mail" name="email" id="email" value="{{ old('email') }}">

    <textarea name="message" id="message" cols="30" rows="10"> {{ old('message') }} </textarea>

    <button type="submit" class="btn btn-primary">Send Message</button>
    <!-- For security laravel only allows to pass data throug our form if we pass '@csrf', so laravel knows that you are really you passing data and not someone else -->
    @csrf
</form>

{{ $errors->first('name') }}
{{ $errors->first('email') }}
{{ $errors->first('message') }}


@endsection
