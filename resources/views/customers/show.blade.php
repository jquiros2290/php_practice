<!DOCTYPE html>
<html>
<head>
	<title>Customer Status</title>
</head>
	<body>
		<h1>{{ $user->name }}</h1>
		<h3>Update Status</h3>
		<form action="/customers/{{ $user->id }}" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<input name="_method" type="hidden" value="PATCH">
			    <label for="status">Current Status: </label>
			    <select name="status" id="status">
			    	<option selected="selected">{{ $user->status}}</option>
					<option value="Active">Active</option>
					<option value="Suspended">Suspended</option>
					<option value="Canceled">Canceled</option>
					<option value="Premium">Premium</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</body>
</html>