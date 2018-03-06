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

					<!-- grab all the different status
					//if the id matches the users' status id
					//then I select them, otherwise I just list it -->


					@foreach($banana as $status)
						@if($status->id==$user->status->id)
							<option value="{{$status->id}}" selected>{{$status->status}}</option>
						@else
							<option value="{{$status->id}}">{{$status->status}}</option>
						@endif
					@endforeach

					<!--

						//name of the object to be rendered
						//caption state
						//$array
						//ID

					A::B("the_name","select something", $banana,$user->status->id)
					-->



				</select>

			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</body>
</html>