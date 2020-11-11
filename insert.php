<?php  
	$con = mysqli_connect('127.0.0.1','root','','insta');

	$insert = "INSERT into posts(user, img, text) VALUES ('".$_GET["user"]."', '".$_GET["img"]."', '".$_GET["text"]."')";

	$query = mysqli_query($con, $insert);

	header('Location: index.php' );
?>