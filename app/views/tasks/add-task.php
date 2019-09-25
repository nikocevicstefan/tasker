<?php require_once APP_ROOT . "/views/inc/header.php"?>

<div class="card form-card" style="width: 18rem;">
	<h1 class="transparent-header">Add Task</h1>
	<form action="/tasks/store" method="POST">
		<div class="card-body">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Add Task" name="title">
			</div>
			<div class="form-group">
				<textarea class="form-control" placeholder="Task Description" name="body"></textarea>	
			</div>
			<div class="form-group">
				<select class="form-control" name="category">
					<?php
					foreach($data as $category){
					$categoryId = $category['id'];
					$categoryTitle = $category['title'];
					 echo "<option value=\"$categoryId\">$categoryTitle</option>";
					} 
					 ?>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>		
		</form>
	</div>
</div>

<?php require_once APP_ROOT . "/views/inc/footer.php"?>