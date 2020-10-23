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
<div class="col-md-6">

    <h5>{{ $recipe->name}}</h5>
    <p class="mb-2 text-muted text-uppercase small">{{ $recipe->category->title }}</p>
    <ul class="rating">

        @foreach($recipe->ingredient as $ingredient)
            <li>
                {{ $ingredient->name }} {{ $ingredient->unit }}
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
</body>
</html>
