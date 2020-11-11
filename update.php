<?php  
	$con = mysqli_connect('127.0.0.1','root','','insta');

  	$query = mysqli_query($con, "UPDATE posts SET img='{$_GET['img']}' text='{$_GET['text']}' WHERE id='{$_GET['id']}'");

  	header('Location: index.php');
?>