<?php  
include "regis.php"?>
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
<div style="position:absolute;width:100%; height:50px;left:0px; top:0px;opacity:0.8; background-color:black;color:white"></div>




<div style="position:absolute; width:100px; height:50px;"></div>
<a href="1.php">
<div style="position:absolute; left:50px; top:10px; width:100px; height:50px;"id="mydiv"div align="center" ><button type="button" class="btn btn-default" aria-label="Left Align" style="border-color:black;color:white;opacity:0.4;background-color:black;">
  <span class="glyphicon glyphicon-home" aria-hidden="true" ></span>
</button></div></a>
<div style="position:absolute; width:100px; height:50px;"></div>
<a href="2.php">
<div style="position:absolute; left:180px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">
Earth</div></a>
<div style="position:absolute; width:100px; height:50px;">
<a href="3.php">
<div style="position:absolute; left:330px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">Planets</div></a>
<div style="position:absolute; width:100px; height:50px;">
<a href="4.php">
<div style="position:absolute; left:480px; top:15px; width:100px; height:20px;"id="mydiv"div align="center">Asteroids</div></a>
<div style="position:absolute; width:100px; height:50px;">
<a href="5.php">
<div style="position:absolute; left:630px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">Comets</div></a>
<div style="position:absolute; width:100px; height:50px;">
<a href="6.php">
<div style="position:absolute; left:780px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">Black holes</div></a>
<div style="position:absolute; width:100px; height:50px;">
<a href="7.php">
<div style="position:absolute; left:930px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">Transports</div></a> 
<div style="position:absolute; width:100px; height:50px;">
<a href="8.php">
<div style="position:absolute;left:1080px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">Support</div></a> 



<div style="position:absolute; width:100px; height:50px;">
<div class="dropdown"style="position:absolute;left:1200px;top:10px" >
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"style="border-color:black;color:white;opacity:0.4;background-color:black">
    
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li style="color:gray;text-align:center;top:20px">Your Bag is empty</li>
    <li role="separator" class="divider"></li>
    <li>
  

<a href="bag.php"style="color:#733540" ><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbspBag</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="fav.php"style="color:#733540 "><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>&nbspFavourites</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="orders.php"style="color:#733540 "><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbspOrders</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="account.php"style="color:#733540 "><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbspAccount</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="signin.php"style="color:#733540 "><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbspSign in</a></li>
  </ul>
</div>




<div class="form-group" style="position:absolute;left:1250px;top:10px;"> 

<button type="submit" style="border-color:black;color: white;opacity:0.4;background-color: black;" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span></button> 

</div>
<!--Menu-->
<!--Account-->  
<div style="position:absolute;width:1000px;height:1000px;top:320px;left:200px;background-color:white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<form method="POST" >

  
  
  <div class="form-group" style="margin-left:250px;width:500px">
    
   <input class="form-control" type="email"  id="exampleInputEmail1" placeholder="name@example.com" name="login">
  </div>
  <div class="form-group" style="margin-left:250px;width:500px">
    
   <input class="form-control" type="password" id="exampleInputPassword1" placeholder="Password" name="password1">
  </div>
  <div class="form-group" style="margin-left:250px;width:500px">
    
   <input class="form-control" type="password" id="exampleInputPassword1" placeholder="Confirm Password" name="password2">
  </div>
  <div class="form-group" style="margin-left:250px;width:225px">
    
   <input class="form-control" type="text" placeholder="Name " name="name">
  </div>
  <div class="form-group" style="margin-left:250px;width:225px">
    
   <input class="form-control" type="text" placeholder="Surname" name="surname">
  </div>

  <div class="form-group"style="margin-left:250px;width:500px">
    
    <select class="form-control" placeholder="Gender">
    
    
    <option>Male</option> 
    <option>Female</option> 
    
 
  
    </select>
  </div>
  
  <div class="form-group" style="margin-left:250px;width:500px">
    
   <input class="form-control" type="text" placeholder="Birthday">
  </div>
  <hr>
  <div class="form-group"style="margin-left:250px;width:500px">
    
    <select class="form-control" placeholder="Card">
    <option>Mastercard</option>
  <option>Visa</option>
  <option>Other</option>
  
    </select>
  </div>
  <div class="form-group" style="margin-left:250px;width:500px">
  

    
   <input class="form-control" type="text" placeholder="Number of Card">
  </div><hr>
  
  
 
<div class="form-group" style="margin-left:250px;width:500px">
    
   <input class="form-control" type="text" placeholder="Answer" name="answer">
  </div>
  <button type="submit" name="create"class="btn btn-default" style="border-color:#0085CF;background-color:#0085CF;color:white;margin-left:250px">Create</button>
</form>
</div>
<div class="image" style="position:absolute;width:1350px;height:250px;top:50px;left:0px;
"></div>
<div style="position:absolute;width:1350px;height:250px;top:50px;left:0px;
"><p style="margin-left:500px;margin-top:150px;color:white;">Create your Earth ID</p></div>

</body>
</html>