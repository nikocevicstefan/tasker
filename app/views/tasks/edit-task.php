<?php require_once APP_ROOT . "/views/inc/header.php";
$task = $data['task'];
$categories = $data['categories'];
?>
<div class="card form-card" style="width: 18rem;">
	<h1 class="transparent-header">Edit Task</h1>
	<form action="/tasks/update" method="POST">
		<div class="card-body">
			<input type="hidden" name="id" value="<?php echo $task['id']; ?>">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Add Task" name="title" value="<?php echo htmlspecialchars($task['title']) ?>">
			</div>
			<div class="form-group">
				<textarea class="form-control" placeholder="Task Description" name="body"><?php echo htmlspecialchars($task['body']) ?></textarea>
			</div>
			<div class="form-group">
				<select class="form-control" name="category">
					<?php foreach ($categories as $category)
						$id = $category['id'];
					$taskCategoryId = $task['category_id'];
					$title = $category['title'];
					if ($id === $taskCategoryId) {
						echo "<option value=\"$id\" selected'>$title</option>";
					}
					echo "<option value=\"$id\">$title</option>";
					?>
				</select>
			</div>
			<div class="form-group" style="display:flex; justify-content: space-between;">
				<a href="/tasks/index" class="btn btn-warning">Cancel</a>
				<button type="submit" class="btn btn-info">Submit</button>
			</div>
	</form>
</div>
</div>

<?php require_once APP_ROOT . "/views/inc/footer.php" ?>