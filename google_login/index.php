<?php

	session_start();
//=========== facebook ===========
include_once('google-config.php');
include_once('google-login.php');

?>

<!doctype html>
<link rel="stylesheet" type="text/css" href="css/styleggl.css">
<head>
	<title>13570125</title>
</head>
<body> 
	<?php
		if(isset($_SESSION['token'])){
		?>
		<div class="box-wrapper">
			<h1>Account Details</h1>
			<div class="box-img">
				<img src="<?php echo $google_img ; ?>" alt="">
			</div>
			<div style="float: left; margin-left: 200px; margin-top: 10px;">
				<p>ชื่อ google :  <?php echo $google_name ; ?></p>
				<p>ชื่อจริง :  <?php echo $google_fname ; ?></p>
				<p>ชื่อสกุล :  <?php echo $google_lname ; ?></p>
				<p>เพศ :  <?php echo $google_gender ; ?></p>
				<p>email :  <?php echo $google_email ; ?></p>
			</div>
        		<?php
        			echo '<a href="logout.php" class="myButton"> <button class="box-out"> Logout from google </button>  </a>';
        		?>
    		

		<?php
		}

	?>
		</div>
	
<body>
</body>
</html>
