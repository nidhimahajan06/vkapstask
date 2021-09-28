<!--   FIRST PAGE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMIM</title>
</head>
<body style="background-color:#dad7ff">
<br><br><br><br><br><br><br><br>
       <center>   
    <form method="post" name="admin" action="add.php" onsubmit="return validateForm()" style="border-style: solid; width: 40%;height: 230px ;background-color:rgb(240, 238, 238) ;">
    <h3 style="color: blue;"> ADMIN LOGIN</h3>
      Username :<input type="text" name="username"><br><br>
      Password :<input type="password" name="password"><br><br>
      <input type="submit" name="submit" value="submit">
</form></center>
<script>
      function validateForm() {
  let x = document.forms["admin"]["username"].value ;
  let y = document.forms["admin"]["password"].value ;
  if (x == "vkaps" && y=="vkaps123") {    
  }
  else{
      alert("try again");
      return false;
  }
}
</script>
</body>
</html>