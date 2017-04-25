
<!DOCTYPE html>
    <head>

    </head>
    <body>
        
        <ul>
            @foreach ($recipes as $recipe)
                <li>  <a href="/meals/{{ $recipe -> idRecipes }}"> {{ $recipe->name }} </a> </li>
            @endforeach
        </ul>
                
    </body>
</html>