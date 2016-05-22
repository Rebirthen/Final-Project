<!DOCTYPE html>
<html>
<head>
	<title>Highway to UP</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="text.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {
  cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
</head>


<body>
<!-- Bootstrap carousel)) -->
<div  style="position: absolute;top: 0px;left:0px;bottom: 0px;">
  <img class="mySlides" src="1.png" style="bottom:0px" >
  <img class="mySlides" src="2.png" >
  <img class="mySlides" src="3.png"  >
  <div class="w3-center w3-section w3-large w3-text-white w3-display-middle"  >
    <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)" >&#10094;</div>
    <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1) " >&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

<!--Menu-->


<!--Menu-->
<div style="position:fixed;width:100%; height:50px;left:0px; top:0px;opacity:0.4; background-color:black;color:white"><style="border:5px;border-color:blue;"></div>




<div style="position:fixed; width:100px; height:50px;"></div>
<a href="1.php">
<div style="position:fixed; left:50px; top:10px; width:100px; height:50px;"id="mydiv"div align="center" ><button type="button" class="btn btn-default" aria-label="Left Align" style="border-color:black;color:white;opacity:0.4;background-color:black;">
  <span class="glyphicon glyphicon-home" aria-hidden="true" ></span>
</button></div></a>
<div style="position:fixed; width:100px; height:50px;"></div>
<a href="2.php">
<div style="position:fixed; left:180px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">
Earth</div></a>
<div style="position:fixed; width:100px; height:50px;">
<a href="3.php">
<div style="position:fixed; left:330px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">Planets</div></a>
<div style="position:fixed; width:100px; height:50px;">
<a href="4.php">
<div style="position:fixed; left:480px; top:15px; width:100px; height:20px;"id="mydiv"div align="center">Asteroids</div></a>
<div style="position:fixed; width:100px; height:50px;">
<a href="5.php">
<div style="position:fixed; left:630px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">Comets</div></a>
<div style="position:fixed; width:100px; height:50px;">
<a href="6.php">
<div style="position:fixed; left:780px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">Black holes</div></a>
<div style="position:fixed; width:100px; height:50px;">
<a href="7.php">
<div style="position:fixed; left:930px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">Transports</div></a> 
<div style="position:fixed; width:100px; height:50px;">
<a href="8.php">
<div style="position:fixed;left:1080px; top:15px; width:100px; height:50px;"id="mydiv"div align="center">Support</div></a> 



<div style="position:fixed; width:100px; height:50px;">
<div class="dropdown"style="position:fixed;left:1200px;top:10px" >
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




<div class="form-group" style="position:fixed;left:1250px;top:10px;"> 

<button type="submit" style="border-color:black;color: white;opacity:0.4;background-color: black;" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span></button> 

</div>
</body>
</html>