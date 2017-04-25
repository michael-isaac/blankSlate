@extends ('layouts.master')


    @section ('content')
        <ul>
            @foreach ($recipes as $recipe)
                <li>  <a href="/meals/{{ $recipe -> id }}"> {{ $recipe->name }} </a> </li>
            @endforeach
        </ul>
    @endsection