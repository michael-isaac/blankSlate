@extends ('layouts.master')


    @section ('content')
        <br/>
        <div class="container">
        <div class="col-sm-8 blog-main">
	        <ul>
	            @foreach ($recipes as $recipe)
	                <li>  <h4><a href="/recipes/{{ $recipe -> id }}"> {{ $recipe->name }} </a></h4></li>
	            @endforeach
	        </ul>
        </div>
        </div>
    @endsection