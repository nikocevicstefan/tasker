<?php require APP_ROOT . '/views/inc/header.php'; ?>

<div class="card form-card" style="width: 18rem;">
	<h1 class="transparent-header">Register</h1>
	<form action="/login">
		<div class="card-body">
			<div class="form-group">
				<input type="text" placeholder="Enter name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" placeholder="Enter username" id="username" class="form-control">
			</div>
			<div class="form-group">
				<input type="email" placeholder="Enter email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" id="password" placeholder="Enter Password" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" id="password_confirmation" placeholder="Confirm Password" class="form-control">
			</div>
			<button href="#" type="submit" class="btn btn-primary">Register</button>
		</div>
		<div>
			<a href="/" style="text-align: center;"><h6>Have an account? Login.</h6></a>
		</div>
	</form>
</div>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>

