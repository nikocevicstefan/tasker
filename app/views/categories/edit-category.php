<?php require_once APP_ROOT . '/views/inc/header.php';?>

<div class="card form-card" style="width: 18rem;">
	<h1 class="transparent-header">Edit Category</h1>
	<form action="/categories/update" method="POST">
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
		<div class="card-body">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Edit Category" name="title" value="<?php echo ucwords($data['title']); ?>">
			</div>
			<div class="form-group" style="display:flex; justify-content: space-between;">
				<a href="/categories/index" class="btn btn-warning">Cancel</a>
				<button type="submit" class="btn btn-info">Edit</button>
			</div>
		</div>
	</form>
</div>
<?php require_once APP_ROOT . '/views/inc/footer.php'; ?>