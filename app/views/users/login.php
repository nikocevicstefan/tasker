<?php require APP_ROOT . '/views/inc/header.php'; ?>

<div class="row login-page">
	<div class="col-md-6 xs-12 ">
		<div class="card form-card" style="width: 80%;">
			<h1 class="transparent-header">Login</h1>
			<form action="/users/loginUser" method="POST">
				<div class="card-body">
					<div class="form-group">
						<input type="text" placeholder="Enter username" id="username" name="username" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" id="password" placeholder="Enter Password" name="password" class="form-control">
					</div>
					<div class="form-group" style="text-align: center">
						<button type="submit" class="btn btn-info" style="width:100%">Login</button>
					</div>
					<div>
						<a href="/users/register" style="text-align: center;">
							<h6>No account? Register.</h6>
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-6">
		<img src="<?php echo URL_ROOT . '/img/mockups/mockup3.png' ?>" style="width: 100%;" />
	</div>
</div>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>