<?php 
  error_reporting(0);
  session_start();
  
  $conn = mysqli_connect("localhost","root","","highway to up");

    // Check connection
    
    if (mysqli_connect_error()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      
    }
    
    else if (isset($_POST["submit"])){
      
      $login = $_POST["login"];
      
      $answer = $_POST["answer"];

      
      if (strlen($login)==0 || strlen($answer)==0){
        
        echo "Fill all inputs";
      
      }

      else{
        
        $sql = "SELECT * FROM login WHERE login ='".$login."'  and answer = '".$answer."'";
        
        $result = $conn->query($sql);
        
        if(isset($result->num_rows)){
          
          if ($result->num_rows > 0) {
              
              echo "login";
              
              $_SESSION["login"] == TRUE;
          }
          
          else{
            
            echo "wrong";
          
          }
        
        }
      
      }
    
    }
?>