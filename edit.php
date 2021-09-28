<?php
$conn = mysqli_connect("localhost", "root", "", "vkaps_task");
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
$id = $_GET['id']; 
$qry = mysqli_query($conn,"select * from add_user where name='$id'"); 
$data = mysqli_fetch_array($qry);
if(isset($_POST['update'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $edit = mysqli_query($conn,"update add_user set name='$name', email='$email', phone='$phone' where name='$id'");
    if($edit)
    {
        mysqli_close($conn);
        header("location:edit_delete.php"); 
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body style="background-color:#dad7ff">
<br><br><br><br><br><br><br>
<center>

<form method="POST" style="border-style: solid; width: 40%;height: 230px ;background-color:rgb(240, 238, 238) ;">
<h3>Update Data</h3>
  Name : <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="name" Required><br><br>
 Email : <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="email" Required><br><br>
 Phone :  <input type="text" name="phone" value="<?php echo $data['phone'] ?>" placeholder="phone" Required><br><br>
  <input type="submit" name="update" value="Update">
</form>
</center>
</body>
</html>

