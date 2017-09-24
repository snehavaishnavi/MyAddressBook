<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Hello!! Welcome to your AddressBook</h1>
<form method="POST" action="/search" >
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="exampleInputSearch1">Search</label>
			<input type="text" name="search" class="form-control" placeholder="type name">
		</div>
		<button type="submit" class="btn btn-default">Go</button>
	</form>
</body>
</html> 