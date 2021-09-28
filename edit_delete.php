<!-- FOURTH PAGE -->
<!DOCTYPE html>
<html>
<head>
  <title>Display</title>
</head>
<body style="background-color:#dad7ff">
<center><h3>All Data</h3><table border="2">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td> Phone</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
</center>
<?php
$conn = mysqli_connect("localhost", "root", "", "vkaps_task");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
        $records = mysqli_query($conn,"select * from add_user"); 
        while($data = mysqli_fetch_array($records))
        {
        ?>
          <tr>
          <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['phone']; ?></td>    
            <td><a href="edit.php?id=<?php echo $data['name']; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $data['name']; ?>">Delete</a></td>
          </tr>	
        <?php
        }
        ?>
</table>
</body>
</html>
