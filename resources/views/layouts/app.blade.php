<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('../resources/js/app.js')
{{--    @vite('../resources/css/reset.css')--}}
    @vite('../resources/css/app.css')
    @vite('../resources/css/style.css')
    <title>Blanc Murmure</title>
</head>

<body>
@include('components.navbar')
@yield('content')
</body>
@include('components.footer')
</html>
