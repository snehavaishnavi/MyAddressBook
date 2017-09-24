
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Add New Address!</h4>
	</div>
	<div class="modal-body">
		<form method="POST" action="/add" >
			{!! csrf_field() !!}
			<div class="form-group">
				<label for="exampleInputName1">Name</label>
				<input type="text" name="name" class="form-control" placeholder="name" required="true">
			</div>
			<div class="form-group">
				<label for="exampleInputAddress1">Address 1</label>
				<input type="text" name="address1" class="form-control" placeholder="address">
			</div>
			<div class="form-group">
				<label for="exampleInputAddress2">Address 2</label>
				<input type="text" name="address2" class="form-control" placeholder="address">
			</div>
			<div class="form-group">
				<label for="exampleInputCity1">City</label>
				<input type="text" name="city" class="form-control" placeholder="city">
			</div>
			<div class="form-group">
				<label for="exampleInputState1">State</label>
				<input type="text" name="state" class="form-control" placeholder="state">
			</div>
			<div class="form-group">
				<label for="exampleInputZipCode1">Zip Code</label>
				<input type="text" name ="zipcode" class="form-control" placeholder="zipcode">
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Add</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>
		</form>
	</div>
</div>