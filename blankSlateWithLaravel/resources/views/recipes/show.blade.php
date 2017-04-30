@extends ('layouts.app')


	@section ('content')
		<br/>
		<div class="container">
			<div class="col-sm-8 blog-main">
				<h1> {{ $recipe->name }}  </h1>
				<hr>
				<h4>Directions:</h4>
				<p> {{ $recipe->directions }} </p>
				<hr>
				<h4>Ingredients:</h4>
					<ul>
						@foreach ($ingredients as $ingredient)
							<li> 
								{{ $ingredient -> amount }}
								{{ $ingredient -> measurment }}
								{{ $ingredient -> name}}
								@if(!empty ($ingredient->descrition)), @endif
								{{ $ingredient -> descrition }}
							</li>
						@endforeach
					</ul>
			</div>
		</div>
	@endsection