@extends('layouts.estilos')
@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ReactJS</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<header>
    <div class="content d-flex justify-content-center align-items-center fuente1">
        <strong>REACT JXS</strong>
    </div>
</header>

<body>
    <div class="content d-flex justify-content-center align-items-center">
        <div id="app"></div>
    </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
@endsection
