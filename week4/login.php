<?php
 include("db_connect.php");

 if (isset($ POST['login'])) {

   $usernane = $_POST[ 'usernane'];

   $password = mđ5($_POST[ 'passuord' ]);



  $query = "SELECT FROM users MHERE usernane='$username' AND password='$password";
  $result = mysqli_ query($1ink, $query);



  if (mysqli_num rows(§result) == 1) {
     echo("Login successful!");
  } else {
     echo "Wrong infor";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Document</title>
</head>
<body>
  <h2>Login</h2>
  <form action="" method="post">
    <label for="">User name</label>
    <input type="text" name="username" required> <br> 
    <label for="">Password</label>
    <input type="password" name="password" id="" required>
    <input type="submit" name="login" value="Login">
  </form>
</body>
</html>