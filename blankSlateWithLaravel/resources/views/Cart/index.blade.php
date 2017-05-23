@extends ('layouts.app')


    @section ('content')
        <br/>
        <div class="container">
        <div class="col-sm-8 blog-main">
	        <ul>
	            
            <!-- 
                Below query sums up ingredients 

                SELECT RI.name, SUM(RI.amount)
                FROM bsDB.Meals M INNER JOIN bsDB.RecipeIngredients RI
                ON M.recipeID = RI.recipeID
                GROUP BY RI.name;
            -->

	        </ul>
        </div>
        </div>
    @endsection