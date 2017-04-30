@extends('layouts.app')

@section('content')

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">BlankSlate</h1>
        <p class="lead text-muted">Meal Prep on another level.</p>
        <p>
          <a href="/recipes" class="btn btn-primary">View All Recipes</a>
          <a href="/recipes/create" class="btn btn-secondary">Add a Recipe</a>
        </p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">
        <div class="row">
          
          @foreach ($recipes as $recipe)
            <div class="card">
              <img data-src="holder.js/100px280/thumb" alt="Card image cap">
              <a href="/recipes/{{ $recipe -> id }}"><p class="card-text"> {{ $recipe -> name }} </p></a>
            </div>
          @endforeach
        
        </div>

      </div>
    </div>

@endsection
