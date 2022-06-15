@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	  	<form action="{{route('store-categorie')}}" method="POST">
	  	@csrf 
	  		
	  			<div class="form-group">
	  				<label for="disabledTextInput">enter the categorie name</label>
	  				<input type="text" class="form-control" name="name" placeholder="categorie name">
	  			</div>
	  			
	  			
	  			<button type="submit" class="btn btn-primary">Submit</button>
	  		
	  	</form>
	</div>
</div>

@endsection