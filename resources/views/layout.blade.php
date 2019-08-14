<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Learning Laravel 5.8')</title> <!-- add a section title to the template and each template will have a unique title -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    @include('nav')
    {{-- @include('nav', ['username' => 'cool_user']) <!-- simply passing data to a view --> --}}

    {{-- If the sessiont has the 'message' show for us this alert --}}
    @if (session()->has('message'))
        <div class="alert alert-{{'message'}}" role="alert">
           {{session()->get('message')}} {{-- we are 'diving' into our session and telling laravel(php) to display it for us --}}
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>
