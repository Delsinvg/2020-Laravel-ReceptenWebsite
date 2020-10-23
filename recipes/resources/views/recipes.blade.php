<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
</head>
<body>
<div class="container">
    <div class="card-columns">
        @foreach($recipes as $recipe)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $recipe->name }}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Time: {{ $recipe->cookingTime }}</li>
                        <li class="list-group-item">Category: {{ $recipe->category->title }}</li>
                    </ul>
                    <a href="/recipes/{{ $recipe->id }}" class="btn btn-primary">See recipe</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $recipes->links() }}
    </div>
</div>
</body>
</html>
