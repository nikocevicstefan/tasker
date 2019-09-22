<?php require_once APP_ROOT . "/views/inc/header.php"?>

<div class="card form-card" style="width: 18rem;">
	<h1 class="transparent-header">Add Task</h1>
	<form action="/tasks/store" method="POST">
		<div class="card-body">

			<div class="form-group">
				<input type="text" class="form-control" placeholder="Add Task" name="taskTitle">
			</div>
			<div class="form-group">
				<textarea class="form-control" placeholder="Task Description" name="taskBody"></textarea>	
			</div>
			<div class="form-group">
				<select class="form-control">
					<option value="prva">Prva</options>
					<option value="druga">Druga</options>
					<option value="treca">Treca</options>
				</select>
			</div>
		</form>
	</div>
</div>

<?php require_once APP_ROOT . "/views/inc/footer.php"?>