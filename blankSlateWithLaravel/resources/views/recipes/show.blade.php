@extends ('layouts.app')


	@section ('content')
		<br/>
		<div class="container">
			<div class="col-sm-8 blog-main">
				<h1> {{ $recipe->name }}  </h1>
				<p> Directions: {{ $recipe->directions }} </p>
			</div>
		</div>
	@endsection