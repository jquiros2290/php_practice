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
			    	<option selected value="{{$user->status_id}}">{{ $user->status->status }}</option>
			    	@if ($user->status->status != 'Active')
					<option value="1">Active</option>
					@endif
			    	@if ($user->status->status != 'Canceled')
					<option value="2">Canceled</option>
					@endif
			    	@if ($user->status->status != 'Suspended')
					<option value="3">Suspended</option>
					@endif
			    	@if ($user->status->status != 'Premium')
					<option value="4">Premium</option>
					@endif
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</body>
</html>