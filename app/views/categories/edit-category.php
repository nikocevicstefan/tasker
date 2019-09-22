<?php require_once APP_ROOT . '/views/inc/header.php'; ?>

<div class="card form-card" style="width: 18rem;">
	<h1 class="transparent-header">Edit Category</h1>
	<form action="/categories/store" method="POST">
		<div class="card-body">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Edit Category" name="categoryTitle">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Edit</button>
			</div>
		</div>
	</form>
</div>
<?php require_once APP_ROOT . '/views/inc/footer.php'; ?>