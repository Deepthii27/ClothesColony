<?php
	session_start();
    $user=$_SESSION['u_id'];
    $username=$_SESSION['u_name'];
    if(!(isset($user))){
    	header('location:loginuser.php');
    }

?>