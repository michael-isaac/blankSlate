@extends ('layouts.app')

	@section ('content')
		</br/>
		<div class="container">
			<div class="col-sm-8 blog-main">
				<h1>Add a Recipe</h1>

				<hr>

				<form method="POST" action="/recipes">
				 
				 <!-- following line returns a hidden input to make sure this request is made from within our site (security) [should include in all forms]-->
					{{ csrf_field() }}

					<div class="form-group">
					    <label for="RecipeName">Recipe Name</label>
					    <input type="text" class="form-control" id="RecipeName" name="RecipeName" >
					</div>
					  
					<div class="form-group">
						<label for="directions">Directions</label>
						<textarea class="form-control" id="directions" name="directions" ></textarea>
					</div>
					 
					<div class="form-group">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
					
					@include ('layouts/errors')

				</form>
			</div>
		</div>
	@endsection