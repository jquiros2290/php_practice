<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Customer Status</title>
	<script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'POST',
            url: '/customers/{{ $user->id }}',
            data: $('form').serialize(),
            success: function () {
              alert('Customer status has been changed. ⚡');
            }
          });

        });

      });
    </script>
</head>
	<body>
		<h1>{{ $user->name }}</h1>
		<h3>Update Status</h3>
		<!-- <form action="/customers/{{ $user->id }}" method="POST" id="status_form"> -->
		<form id="status_form">
			{{ csrf_field() }}
			<div class="form-group">
				<!-- <input name="_method" type="hidden" value="PATCH"> -->

				<label for="status">Current Status: </label>
			    <select name="status" id="status">

					<!-- grab all the different status
					//if the id matches the users' status id
					//then I select them, otherwise I just list it -->


					@foreach($statuses as $status)
						@if($status->id == $user->status->id)
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
				<input type="submit" name="submit" value="Update">
				<!-- <button type="submit" name="submit" class="btn btn-primary">Update</button> -->
			</div>
		</form>
	</body>
</html>