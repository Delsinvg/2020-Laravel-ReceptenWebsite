@extends('master')

@section('content')
    <body>
    <div class="container">
        <div>
            <div class="col-md-6">
                <h4><b>{{ $recipe->name}}</b></h4>
                <p class="mb-2 text-muted text-uppercase small">{{ $recipe->category->title }}</p>
                <ul class="rating">

                    @foreach($recipe->ingredient as $ingredient)
                        <li>
                            {{ $ingredient->pivot->quantity }}   {{ $ingredient->name }} {{ $ingredient->unit }}
                        </li>
                    @endforeach

                </ul>
                <p class="pt-1">{{ $recipe->description }}</p>
                <hr>
                <div class="table-responsive mb-2">
                    <table class="table table-sm table-borderless">
                        <tbody>
                        <tr>
                            <td class="pl-0 pb-0 w-25">Quantity</td>
                        </tr>
                        <tr>
                            <td class="pl-0">
                                <div class="def-number-input number-input safari_only mb-0">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="minus"></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="plus"></button>
                                </div>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card-columns">
            @foreach($randomRecipes as $recipe)
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
    </div>
    </body>

@endsection
