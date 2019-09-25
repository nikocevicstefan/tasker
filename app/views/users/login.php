<?php require APP_ROOT . '/views/inc/header.php'; ?>

<div class="card form-card" style="width: 18rem;">
	<h1 class="transparent-header">Login</h1>
	<form action="/users/loginUser" method="POST">
		<div class="card-body">
			<div class="form-group">
				<input type="text" placeholder="Enter username" id="username" name="username" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" id="password" placeholder="Enter Password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
		<div>
			<a href="users/register" style="text-align: center;">
				<h6>No account? Register.</h6>
			</a>
		</div>
	</form>
</div>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>