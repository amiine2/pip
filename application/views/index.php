<!DOCTYPE html>
<html>
<head>
	<title>liste des taches</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href='<?php echo base_url() . "lib/bootstrap/dist/css/bootstrap.css"; ?>'>
    <style type="text/css">
    	th{text-align: center;color: white;height: 1.2em;}
    </style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<p><h3>liste des taches</h3></p>
                <p><a class="button" href='<?php echo site_url("Task/newTask") ?>'>New Task</a></p>

				<table class="table table-bordered">
				  <thead class="bg-warning">
				    <tr>
				      <th scope="col" style="width: 5%;">#</th>
				      <th scope="col" style="width: 67%;">Task</th>
				      <th scope="col" style="width: 5%;">Time</th>
				      <th scope="col" style="width: 10%;">Status</th>
				      <th style="width: 13%;"></th>
				    </tr>
				  </thead>
				  <tbody>
				    <?php if(isset($tasks)&&is_array($tasks)){ foreach ($tasks as $row) { ?>
                        <tr>
                        	<td><?php echo $row->num; ?></td>
                        	<td><?php if($row->status=='done')echo '<strike>' . $row->task . '</strike>';else echo $row->task; ?></strike></td>
                        	<td><?php echo $row->time; ?></td>
                        	<td><?php echo $row->status; ?></td>
                        	<th><a class="button" href='<?php echo site_url("Task/getUpdate/$row->id") ?>'>Update</a> | <a class="button" href='<?php echo site_url("Task/delete/$row->id") ?>'><span class="text-danger">Delete</span></a></th>
                        </tr>
				    <?php }} ?>   

				  </tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html> 