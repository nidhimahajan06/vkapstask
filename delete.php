<?php
$conn = mysqli_connect("localhost", "root", "", "vkaps_task");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "DELETE FROM add_user WHERE name='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error in deleting record: " . $conn->error;
    }  	
    ?>