<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Base CRUD</title>
</head>

<body class="bg-info">

    @include('includes.header')
    <div class="container-fluid">
        <div class="bg-secondary p-3 mt-5 rounded-3">

            @yield('content')
        </div>
    </div>

</body>

</html>
