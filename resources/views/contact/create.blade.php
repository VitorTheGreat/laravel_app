@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')

<h1>Contact Us</h1>


<form action="" method="post">
    <input type="text" placeholder="Customer Name" name="name" id="name" value="{{ old('name') }}">
    <input type="text" placeholder="Customer E-mail" name="email" id="email" value="{{ old('email') }}">

    <textarea name="message" id="message" cols="30" rows="10"> {{ old('message') }} </textarea>

    <button type="submit">Send Message</button>
    <!-- For security laravel only allows to pass data throug our form if we pass '@csrf', so laravel knows that you are really you passing data and not someone else -->
    @csrf
</form>

{{ $errors->first('name') }}
{{ $errors->first('email') }}
{{ $errors->first('message') }}


@endsection
