<?php

	session_start();
//=========== facebook ===========
include_once('google-config.php');
include_once('google-login.php');

?>

<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
	<title>13570340</title>
</head>
<body> 
	<?php
		if(isset($_SESSION['token'])){
		?>
		<div class="box-info2">
			<h1>ข้อมูลรายละเอียด</h1>
			<div class="box-img">
			<img src="<?php echo $google_img ; ?>" alt="">
			</div>
			<p>ชื่อ google :  <?php echo $google_name ; ?></p>
			<p>ชื่อจริง :  <?php echo $google_fname ; ?></p>
			<p>ชื่อสกุล :  <?php echo $google_lname ; ?></p>
			<p>เพศ :  <?php echo $google_gender ; ?></p>
			<p>email :  <?php echo $google_email ; ?></p>

			
        		<?php
        			echo '<a href="logout.php" class="myButton"> <button class="box-but"> Logout with google </button>  </a>';
        		?>
    		

		<?php
		}

	?>
	
<body>
</body>
</html>
