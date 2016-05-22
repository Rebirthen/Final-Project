<?php

include_once 'db.php';

/* code for login insert */
if(isset($_POST['save']))
{

     $name = $MySQLiconn->real_escape_string($_POST['name']);
     $surname = $MySQLiconn->real_escape_string($_POST['surname']);
     $answer = $MySQLiconn->real_escape_string($_POST['answer']);
     $nameCard = $MySQLiconn->real_escape_string($_POST['nameCard']);
 
  $SQL = $MySQLiconn->query("INSERT INTO login(name,surname,answer,nameCard) VALUES('$name','$surname','$answer','$nameCard')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
}
/* code for login insert */


/* code for login delete */
if(isset($_GET['del']))
{
 $SQL = $MySQLiconn->query("DELETE FROM login WHERE id=".$_GET['del']);
 header("Location: adminka.php");
}
/* code for login delete */



/* code for login update */
if(isset($_GET['edit']))
{
 $SQL = $MySQLiconn->query("SELECT * FROM login WHERE id=".$_GET['edit']);
 $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
 $SQL = $MySQLiconn->query("UPDATE login SET name='".$_POST['name']."', surname='".$_POST['surname']."',answer='".$_POST['answer']."', nameCard='".$_POST['nameCard']."' WHERE id=".$_GET['edit']);
 header("Location: adminka.php");
}
/* code for login update */

?>