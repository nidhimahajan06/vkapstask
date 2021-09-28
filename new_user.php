<!-- THIRD PAGE -->
<!DOCTYPE html>
<html>
<head>
	<title>new user added</title>
</head>
<body style="background-color:#dad7ff">
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "vkaps_task");
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		// Taking all 4 values from the form data(input)
        $id = $_REQUEST['id'];
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		// Performing insert query execution
		// here our table name is add_user
		$sql = "INSERT INTO add_user VALUES ('$id','$name',
			'$email','$phone')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3><b>User added Successfully. </b><br>";
			echo nl2br("\n$id\n$name\n $email\n "
				. "$phone");
                echo "<br><br>";
				echo"If you want to update , edit , delete please click on the below button";
		} else{
			echo "ERROR: Sorry $sql. "
				. mysqli_error($conn);
		}
		// Close connection
		mysqli_close($conn);
		
		?>
	<br><br>
	<button><a href="edit_delete.php">EDIT/DELETE</a></button></center>
</body>

</html>
