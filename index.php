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
		<link rel="stylesheet" media="screen" href="css/style.css">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		
			*{
				padding: 0;
				margin: 0;
				box-sizing: border-box;
			}

			html {
				overflow: hidden;
			}
			
			.navbar {
				z-index: 99;
			}
			#particles-js {
				background-color: #434343;
			}
			.box {
				margin-top: 2rem;
				text-align: center;
				width: 100vw;
				height: 90vh;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				display: flex;
				justify-content: center;
				align-items: center;
				color: #f1f1f1;

			}
			.logo {
				width: 150px;
				height: 150px;
				height: auto;
				border-radius: 50%;
				overflow: hidden;
				background-color: #fff;
				object-fit: contain;
				padding: 1rem;
				margin: 0 auto;
			}
			.logo img{
				width: 100%;
				height: 100%;

			}
		</style>
		
		<title>Home : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>
	</head>
	
	<body>
		<?php
			include './assets/navbar.php';
		?>
		<div id="particles-js"></div>
		<div class="box">
			<div class="header">
				<div class="logo">
					<img class="" class="img" src="./img/release.png">
				</div>
				<div>
					<h1>RFID Attendance System</h1>
					<h4>PHP - mySQL - NodeMCU - RFC522</h4>
				</div>
			</div>
		</div>
	<script src="particles.js"></script>
	<script src="app.js"></script>
	</body>
</html>