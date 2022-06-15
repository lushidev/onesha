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
	  			<div class="form-group">
	  				<label for="disabledTextInput">enter the categorie name</label>
	  				<select name="categorie_id">
	  				@foreach($categories as $categorie)
	  				  <option value="{{$categorie->id}}">{{$categorie->name}}</option>
	  				</select>
	  			</div>

	  			<div class="form-group col-md-auto">
	  				<textarea id="myTextarea" name="desciption"></textarea>
	  			</div>
	  			
	  			
	  			<button type="submit" class="btn btn-primary">Submit</button>
	  		
	  	</form>
	</div>
</div>

@endsection