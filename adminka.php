<?php
include_once 'crud.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administration</title>

<link rel="stylesheet" href="style.css" type="text/css" />
 <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <style >
div.image{
  content: url(23.png)
}


 </style>
</head>
<body>
<?php  include "menu.php" ?>
<div class="image" style="position:absolute;width:1350px;height:250px;top:50px;left:0px;
"></div>
<div style="position:absolute;width:1350px;height:250px;top:50px;left:0px;
"><p style="margin-left:500px;margin-top:150px;color:white;">Administration</p></div>

<center>

<div id="form"class="container" style="margin-top: 300px" >
<form method="post" class="form-horizontal">
<table class="table table-striped table-bordered"  border="1" cellpadding="15">
<tr>
<td><input class="form-control" type="text" name="name" placeholder="First Name" value="<?php if(isset($_GET['edit'])) echo $getROW['name'];  ?>" /></td>
</tr>
<tr>
<td><input class="form-control" type="text" name="surname" placeholder="Last Name" value="<?php if(isset($_GET['edit'])) echo $getROW['surname'];  ?>" /></td>
</tr>
<tr>

<td><input class="form-control"  type="text" name="answer" placeholder="First answer" value="<?php if(isset($_GET['edit'])) echo $getROW['answer'];  ?>" /></td>
</tr>
<tr>
<td><input class="form-control"  type="text" name="nameCard" placeholder="First NameCard" value="<?php if(isset($_GET['edit'])) echo $getROW['nameCard'];  ?>" /></td>
</tr>
<td>

<?php
if(isset($_GET['edit']))
{
 ?>
 <button class="btn " type="submit" name="update">update</button>
 <a class="btn" href="search.php" >Search</a>
 <?php
}
else
{
 ?>
 <button class="btn" type="submit" name="save">save</button>
 <a class="btn" href="search.php">Search</a>

 <?php
}
?>
</td>
</tr>
</table>
</form>

<br /><br />

<table class="table table-striped table-bordered" width="100%" border="1" cellpadding="15" align="center">
<?php
$res = $MySQLiconn->query("SELECT * FROM login");
while($row=$res->fetch_array())
{
 ?>
	 <th>id</th>
	 <th>Name</th>
	 <th>Surname</th>
	 
	 <th>Answer</th>
	 <th>Type of Card</th>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['surname']; ?></td>
    <td><?php echo $row['answer']; ?></td>
    <td><?php echo $row['nameCard']; ?></td>
    


    <td><a class="btn btn-success" href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('sure to edit !'); " >edit</a></td>
    <td><a class="btn btn-danger" href="?del=<?php echo $row['id']; ?>" onclick="return confirm('sure to delete !'); " >delete</a></td>
    </tr>
    <?php
}
?>
</table>
</div>
</center>
</body>
</html>