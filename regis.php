<?php 
    
	session_start();
	$conn = mysqli_connect("localhost","root","","highway to up");
   
		// Check connection
		if (mysqli_connect_error()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
    
    
		if (isset($_POST["create"])) {
			$login = $_POST["login"];
			$data="SELECT * from login WHERE login=\"$login\" ";
    		$row = mysqli_fetch_assoc(mysqli_query($conn,$data));
			$password1 = $_POST["password1"];
			$password2 = $_POST["password2"];
			$name = $_POST["name"];
			$surname= $_POST["surname"];
			$answer = $_POST["answer"];
			
			if ($password1 != $password2) {
				echo "not right";
				
			}

			else if ($login=$row) {
				echo "Your login exist";
			}
			
			else{
				$sql = "INSERT INTO login(login,password,name,surname,answer)
				VALUES ('" . $login . "', '" . $password1."','" . $name . "', '" . $surname . "', '" . $answer."')";

				if ($conn->query($sql) === TRUE) {
			    		header("location:account.php");
                }
				else{
			    	echo ("Error: " . $sql . "<br>" . mysqli_error());
				}

				$conn->close();	
			}
	
		}	

		
?>