@extends ('layouts.app')


	@section ('content')
		<br/>
		<div class="container">
			<img src="/images/{{ $recipe->filename }}" onerror="this.src='/images/default.jpg'" style="width:300px; height:300px; float:right;">
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
								{{ $ingredient -> measurement }}
								{{ $ingredient -> name}}
								@if(!empty ($ingredient->description)), @endif
								{{ $ingredient -> description }}
							</li>
						@endforeach
					</ul>
			</div>
		</div>
	@endsection