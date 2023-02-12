<?php

	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<script src="jquery.min.js"></script>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
		<style>
		
		</style>
		
		<title>Logs : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>
	</head>
	<body>
		<?php 
			include "./assets/navbar.php";
		?>
		<div class="container mt-5">
			<table class="table table-striped" id="table">
				<thead class="bg-dark text-white">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Time Stamp</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include 'database.php';
	                   $pdo = Database::connect();
	                   $sql = 'SELECT * FROM logs ORDER BY id DESC';
	                   foreach ($pdo->query($sql) as $row) {
	                            echo '<tr>';
	                            echo '<td>'. $row['uid'] . '</td>';
	                            echo '<td>'. $row['name'] . '</td>';
	                            echo '<td>'. $row['timestamp'] . '</td>';
	                            echo '<td>'. $row['status'] . '</td>';
								
	                            echo '</tr>';
	                   }
	                   Database::disconnect();
					?>
			</table>
		</div>
	</body>
	<script src="jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready( function () {
		    $('#table').DataTable();
		} );
	</script>
</html>