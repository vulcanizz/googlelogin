<?php
include_once 'google-config.php';

if(isset($_GET['code'])){
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
}
if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
}
if ($gClient->getAccessToken()) {
    $gUserProfile = $google_oauthV2->userinfo->get();

    // ข้อมูลมาแล้วทำตรงนี้
    include_once('connect.php');

        if ($conn->connect_error) {
            die("connection failed : ".$conn -> connect_error);
        }else{
             //variable FB Data
            $google_id = $gUserProfile["id"];
            $google_name =  $gUserProfile["name"];
            $google_fname = $gUserProfile["given_name"];
            $google_lname = $gUserProfile["family_name"];
            $google_email = $gUserProfile["email"];
            $google_link = $gUserProfile["link"];
            $google_gender = $gUserProfile["gender"];
            $google_locale = $gUserProfile["locale"];
            $google_img = $gUserProfile["picture"];


            $sql = "SELECT * FROM `google_login` WHERE google_id = '$google_id'";
            $result = $conn->query($sql);


            if ($result -> num_rows > 0){
    
            }else{

                $sql = "INSERT INTO `google_login` 
                	(`ID`, `google_id`, `google_name`, `google_fname`, `google_lname`, `google_email`, `google_link`, `google_gender`, `google_locale`, `google_img`) 
                	VALUES (NULL, '$google_id', '$google_name', '$google_fname', '$google_lname', '$google_email', '$google_link', '$google_gender', '$google_locale', '$google_img')";
                
                if ($conn->query($sql) === TRUE) {
                    echo "INSERT COMPLETE";
                }else{
                    echo "Error";
                    echo $sql;
                }
                
                $conn->close();
            }
        } 


	}else{

	    ?>
			<div class="box-info">
        <?php

        echo '<a href="'.$gloginUrl.'" class="myButton"> <button class="box-but"> Login with Google  </button>  </a>';
        ?>

	    <?php
	    
	}

?>