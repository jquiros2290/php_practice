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
			    	<option selected hidden value="{{$user->status_id}}">{{ $statuses[$user->status_id]->status }}</option>
					<option value="0">Active</option>
					<option value="1">Canceled</option>
					<option value="2">Suspended</option>
					<option value="3">Premium</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</body>
</html>