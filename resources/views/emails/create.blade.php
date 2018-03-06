<div class="row">
	<div class="col-md-6">
	<h1>Sign Up</h1>
	<hr>
		<form action="/emails" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
			    <label for="email">Email: </label>
			    <input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign up</button>
			</div>
		</form>
	</div>
</div> 
