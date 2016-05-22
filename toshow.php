<?php
error_reporting(0);
session_start();
include 'connection.php';

$login = $_SESSION['login'];
$data = " SELECT * from src WHERE login=\"$login\" ";
$row1 = mysqli_fetch_assoc(mysqli_query($conn,$data));
$id = $row1['num'];
$data2 = "SELECT * from src where num='".$id."' ";
$row = mysqli_fetch_assoc(mysqli_query($conn,$data2));
$url = $row['url'];
if (isset($_POST['show'])) {
	echo "<img src=$url>";
}
?>