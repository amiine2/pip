
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
				<h2>New Task:</h2>
                <p><a class="button" href='<?php echo site_url("Task/") ?>'>All Tasks</a></p>

				<?php echo form_open(site_url("Task/insert")); ?>
				<div class="form-group">
				    <label for="exampleInputEmail1">Number</label>
				    <input type="text" class="form-control" id="num" name="num" placeholder="number">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Task</label>
				    <input type="text" class="form-control" id="task" name="task" placeholder="Task">
				  </div>
			      <div class="form-group">
				    <label for="time">Time</label>
				    <input type="text" class="form-control" id="time" name="time" placeholder="Time">
				  </div>
				  <div class="form-group">
				    <label for="status">Status</label>
				    <select id="status" name="status" class="form-control">
						<option value="not started">Not Started</option>    	
						<option value="in progress">In Progress</option>    	
						<option value="done">Done</option>    	
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