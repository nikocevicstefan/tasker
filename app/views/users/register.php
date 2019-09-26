<?php require APP_ROOT . '/views/inc/header.php'; ?>

<div class="card form-card" style="width: 18rem;">
	<h1 class="transparent-header">Register</h1>
	<form action="/users/storeUser" method="POST">
		<div class="card-body">
			<div class="form-group">
				<input type="text" placeholder="Enter name" id="name" name="name" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" placeholder="Enter username" id="username" name="username" class="form-control">
			</div>
			<div class="form-group">
				<input type="email" placeholder="Enter email" id="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" id="password" placeholder="Enter Password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" id="password_confirmation" placeholder="Confirm Password" name="passwordConfirmation" class="form-control">
			</div>
			<div class="form-group" style="text-align: center">
				<button type="submit" class="btn btn-info" style="width:100%;">Register</button>
			</div>
		</div>
		<div>
			<a href="/" style="text-align: center;">
				<h6>Have an account? Login.</h6>
			</a>
		</div>
	</form>
</div>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>