<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <title>{{ $title ?? 'MarketShop' }}</title>
</head>
<body data-theme = "light" class = "bg-gray-100 min-h-screen">
    {{$slot}}
</body>
</html>