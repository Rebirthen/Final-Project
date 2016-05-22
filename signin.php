<?php 
include "userchecker.php"
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
<?php include "menu.php" ?>

<!--Menu-->


<div style="position:absolute;width:300px;height:200px;top:300px;left:300px; color:black;">
<form method ="POST" >

  <p style="font-size:20px"><strong>Sign in to Highway</strong></p>
  
  <div class="form-group" style="width:300px">
    
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Earth ID*" name="login">
  </div>
  <div class="form-group"style="width:300px">
    
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password*" name="password">
  </div>
  <a href="forgot.php" ><p style="font-size:13px;color:#0085cf">Forgot your Earth ID or<br>Password?</p></a>
  <button type="submit" class="btn btn-default" name="loginButton" style="border-color:#0085CF;background-color:#0085CF;color:white;margin-left:230px">Sign in</button>
</form>
  </div>
  <div style="position:absolute;width:300px;height:200px;top:330px;left:800px; color:black;"><p style="font-size:16px">You can use your Earth ID for other Highway services such as</p>
  <li>Highway Store</li> 
  <li>NASA</li>
  <li>Almaty Observatory</li>
  <a href="create.php" ><p style="font-size:13px;color:#0085cf">&nbsp&nbsp&nbspDon't have an Earth ID? Create one now.</p></a></div>
  <div style="position:absolute;width:1000px;height:50px;top:130px;left:200px; color:black;"><p style="margin-left:50px;margin-top:20px;" >Please Sign in</p><hr style="color:#F1F1F1 ;width:900px;top:0px;"></div>
  <div style="position:absolute;width:100px;height:50px;top:165px;left:1125px; color:gray;"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>

  <!--signin-->
  

</body>
</html>
