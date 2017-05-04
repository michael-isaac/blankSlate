@extends('layouts.app')

@section('content')

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">BlankSlate</h1>
        <p class="lead text-muted">Meal Prep on another level.</p>
        <p>
          <a href="/recipes" class="btn btn-primary">View All Recipes</a>
          <a href="/recipes/create" class="btn btn-secondary">Post a Recipe</a>
        </p>
      </div>
    </section>


    <div class="row">
      @foreach ($recipes as $recipe)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <a href="/recipes/{{ $recipe -> id }}">
              <img src="/images/{{ $recipe->filename }}" onerror="this.src='/images/default.jpg'" style="width:300px; height:300px; border-radius: 7px" alt="image load failure">
            </a>
            <div class="caption">
              <h3> {{ $recipe -> name }} </h3>
              <p>...</p>
              <form method="POST" action="/meals/addToCart">
                <div class="form-group">
                  {{ csrf_field() }}
                  <input type="hidden" name="recipeID" value="{{ $recipe->id }}" />
                  <button type="submit" class="btn btn-primary">Add to Cart</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <!--
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
    -->

@endsection

