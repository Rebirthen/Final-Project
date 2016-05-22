<?php
session_start();
include 'connection.php';
$errors= array();

if (!isset($_POST['submit'])) {

	header("Location:signin.php");
}


$login = $_SESSION['login'];
$data="SELECT * from login WHERE login=\"$login\" ";
$row = mysqli_fetch_assoc(mysqli_query($conn,$data));
$id = $row['num'];
$f_name = "images/";
$p_name = $id."_image.jpg";
$full_path = $f_name.$p_name;
  
  	# code...

 if(is_uploaded_file($_FILES['img']['tmp_name'])){
		move_uploaded_file($_FILES['img']['tmp_name'], $full_path);
		$data = "INSERT INTO src (num, url) values ('".$id."','".$full_path."')";
		mysqli_query($conn, $data);
	 	header("Location:account.php");}
/**foreach ($_FILES["img"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["img"]["tmp_name"][$key];
        $name = $_FILES["img"]["name"][$key];
        move_uploaded_file($tmp_name, "image/$name");
    }
}**/


?>