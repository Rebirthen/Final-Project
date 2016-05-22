<?php 
	$connect = mysqli_connect("localhost","root","","highway to up");
	$output = '';
	$sql = "SELECT * FROM login WHERE name LIKE '%".$_POST['sampleText']."%'";
	$result = mysqli_query($connect,$sql);

	if(mysqli_num_rows($result) > 0){
		$output .= '<h4>SEARCH RESULT</h4>';
		$output .= '<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<th>ID:</th>
				<th>Name:</th>
				<th>Surname:</th>
				<th>Email:</th>
			</tr>
		';
		
	while ($row = mysqli_fetch_array($result)) {
		$output .= "
			<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['surname']."</td>
				
				<td>".$row['login']."</td>
			</tr>";
	}
	$output .= '</table>
	</div>';

	echo "$output";
	}else{
		echo "DATA NOT FOUND";
	}
 ?>