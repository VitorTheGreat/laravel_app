<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Learning Laravel 5.8')</title> <!-- add a section title to the template and each template will have a unique title -->
</head>
<body>

<div class="container">
    @include('nav')
    {{-- @include('nav', ['username' => 'cool_user']) <!-- simply passing data to a view --> --}}

    @yield('content')
</div>

</body>
</html>
