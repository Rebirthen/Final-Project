<?php 
include "usercode.php"
 ?>
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
"><p style="margin-left:500px;margin-top:150px;color:white;">Having Trouble with loging in?</p></div>




   <div class="form-group" style="margin-left:450px;width:500px;margin-top:350px;">
<form method ="POST">
<p style="margin-left:80px;color:black; font-weight:5px;font-size:20px;">Enter your Earth ID to get started.</p>

  
  
  <div class="form-group" style="width:500px">
    
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Earth ID*" name="login">
  </div>
  <div class="form-group"style="width:250px">
    
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Secret word*" name="answer">
  </div>
  
  <button type="submit" class="btn btn-default" name="submit" style="border-color:#0085CF;background-color:#0085CF;color:white;margin-left:430px">Rebirth</button>
</form>
  </div>

   
  
</body>
</html>

