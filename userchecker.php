<?php 
  error_reporting(0);
  session_start();
  
  $conn = mysqli_connect("localhost","root","","highway to up");

    // Check connection
    
    if (mysqli_connect_error()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      
    }
    
    else if (isset($_POST["loginButton"])){
      
      $login = $_POST["login"];
      
      $password = $_POST["password"];


      if ($login=="admin@diana.kz" && $password=="123"){
        
        header('location:adminka.php');
      
      }



      
      if (strlen($login)==0 || strlen($password)==0){
        
        echo "Fill all inputs";
      
      }

      else{
        
        $sql = "SELECT * FROM login WHERE login ='".$login."'  and password = '".$password."'";
        
        $result = $conn->query($sql);
        
        if(isset($result->num_rows)){
          
          if ($result->num_rows > 0) {
              
              header('location:account.php');
              
              $_SESSION["login"] == TRUE;
          }
          
          else{
            
            echo "wrong";
          
          }
        
        }
      
      }
    
    }
?>