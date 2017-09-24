<!DOCTYPE html>
<html>
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Edit Address!</h4>
	</div>
	<div class="modal-body">

		<form method="POST" action="/edit/{{$address->id}}" >
			{!! csrf_field() !!}
			<div class="form-group">
				<label for="exampleInputName1">Name</label>
				<input type="text" name="name" class="form-control" value="{{$address->Name}}" required="true">
			</div>
			<div class="form-group">
				<label for="exampleInputAddress1">Address 1</label>
				<input type="text" name="address1" class="form-control" value="{{$address->Address_1}}" >
			</div>
			<div class="form-group">
				<label for="exampleInputAddress2">Address 2</label>
				<input type="text" name="address2" class="form-control" value="{{$address->Address_2}}">
			</div>
			<div class="form-group">
				<label for="exampleInputCity1">City</label>
				<input type="text" name="city" class="form-control" value="{{$address->City}}">
			</div>
			<div class="form-group">
				<label for="exampleInputState1">State</label>
				<input type="text" name="state" class="form-control" value="{{$address->State}}">
			</div>
			<div class="form-group">
				<label for="exampleInputZipCode1">Zip Code</label>
				<input type="text" name ="zipcode" class="form-control" value="{{$address->ZipCode}}">
			</div>
			<button type="submit" class="btn btn-primary">Done</button>
		</form>
	</div>
</div>