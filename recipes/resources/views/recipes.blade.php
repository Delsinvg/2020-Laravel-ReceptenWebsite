@extends('master')

@section('content')

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

@endsection

