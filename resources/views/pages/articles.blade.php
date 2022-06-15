@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	  	<form action="{{route('store-article')}}" method="POST">
	  	@csrf 
	  		
	  			<div class="form-group">
	  				<label for="disabledTextInput">enter the categorie name</label>
	  				<input type="text" class="form-control" name="title" placeholder="categorie name">
	  			</div>
	  			<div class="form-group col-md-auto">
	  				<textarea id="myTextarea"></textarea>
	  			</div>
	  			
	  			
	  			<button type="submit" class="btn btn-primary">Submit</button>
	  		
	  	</form>
	</div>
</div>

@endsection