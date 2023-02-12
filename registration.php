<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		.control-group {
			/*padding: .2rem 1rem ;*/
		}
		</style>
		
		<title>Registration : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>
	</head>
	
	<body>

		<?php
			include './assets/navbar.php';
		?>

		<div class="container">
			<br>
			<div class="center p-4" style="margin: 0 auto; width:50%; border: 1px solid #f1f1f1;">
				
				<form class="form-horizontal" action="insertDB.php" method="post">
					<div class="control-group">
						<label class="label">ID</label>
						<div class="controls">
							<input class="form-control" name="id" id="getUID" placeholder="Please Scan..." rows="1" cols="1" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input class="form-control" id="div_refresh" name="name" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Gender</label>
						<div class="controls">
							<select name="gender" class="form-control">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
							<input class="form-control" name="email" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Mobile Number</label>
						<div class="controls">
							<input class="form-control" name="mobile" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success mt-2 form-control">Save</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>