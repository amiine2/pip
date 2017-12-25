
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href='<?php echo base_url() . "lib/bootstrap/dist/css/bootstrap.css"; ?>'>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<p><h2>New Task:</h2></p>
                <p><a class="button" href='<?php echo site_url("Task/") ?>'>All Tasks</a></p>
				<?php echo form_open(site_url("Task/update/$task->id")); ?>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Task</label>
				    <input type="text" class="form-control" id="task" name="task"  value="<?php echo htmlspecialchars($task->task); ?>">
				  </div>
			      <div class="form-group">
				    <label for="time">Time</label>
				    <input type="text" class="form-control" id="time" name="time"  value="<?php echo $task->time; ?>">
				  </div>
				  <div class="form-group">
				    <label for="status">Status</label>
				    <select id="status" name="status" class="form-control">
						<option value="not started" <?php if($task->status == "not started") echo 'selected = "selected"'; ?> >Not Started</option>    	
						<option value="in progress" <?php if($task->status == "in progress") echo 'selected = "selected"'; ?>>In Progress</option>    	
						<option value="done" <?php if($task->status == "done") echo 'selected = "selected"'; ?>>Done</option>    	
				    </select>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				<?php echo form_close(); ?>
	
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	
</body>
</html>