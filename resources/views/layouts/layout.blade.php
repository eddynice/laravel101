<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href= "{{asset('css/app.css')}}">
    <link href="/css/app.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
@yield('content')
<footer>
helloword
</footer>
</body>
</html>