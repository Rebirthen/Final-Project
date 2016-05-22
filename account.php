<?php include "regis.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Highway to UP</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="text.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<style >
div.image{
  content: url(23.png)
}


 </style>

<body>

<!--Menu-->


<!--Menu-->
<?php include "menu.php" ?>
<!--Menu-->
<!--Account-->  
<div class="image" style="position:absolute;width:1350px;height:250px;top:50px;left:0px;
"></div>
<div style="position:absolute;width:1350px;height:250px;top:50px;left:0px;
"><p style="margin-left:500px;margin-top:150px;color:white;">Welcome!Upload your photo,if you want</p></div>

	<form action="toupload.php" style="position:absolute;top:400px;left:100px;
"method = "POST" enctype="multipart/form-data">
		<input class ="btn" type="file" name = "img"/><br>
		
		<input class ="btn" type="submit" value = "Send" name="submit"  />
	</form>
	<br>
	<form action="toshow.php" method="POST" enctype="multipart/form-data"style="position:absolute;top:500px;left:100px;
">
		
		<input class ="btn" type="submit" value="Show" name="show">
	</form>
</body>
</html>


  

   
  
</body>
</html>
