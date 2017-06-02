@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
</head>
<body>
	<div class="column_center">
  		<div class="container">
			<form method="post" action="{{ url('/admin/category') }}">
				{{ csrf_field() }}
				<h1>Create Category</h1>
				<label>Title    	:</label><input type="text" name="name"><br>
				<label>Category :</label>	
				<select name="parent_id">					
					<option></option>
					<?php foreach ($categories as $key => $category): ?>						
						<option value="{{$category->id}}">{{$category->name}}</option>
					<?php endforeach ?>				
				</select><br>				
				<input type="submit" value="Add Category">
			</form>
		</div>
	</div>
</body>
</html>
@endsection