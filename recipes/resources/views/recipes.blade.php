<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
</head>
<body>
<div class=".container-fluid">
@foreach($recipes as $recipe)
    <h1>{{ $recipe->name }}</h1>
@endforeach
</div>
</body>
</html>
