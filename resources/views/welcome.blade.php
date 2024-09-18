<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Units</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    <div id="app">
        <transport-units></transport-units>
    </div>
    @vite('resources/js/app.js')
</body>
</html>


