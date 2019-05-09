<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
// $_SESSION['username'] = "dj1254";
 //$_SESSION['password'] = "banana";


if(isset($_SESSION['username'], $_SESSION['password'])){
   
} else{
    //header('Location: login.php');
    //exit;
}
?>

<form action="setSession.php" method="post">
  USERNAME:<br>
  <input type="text" name="Username"><br>
  PASSWORD:<br>
  <input type="text" name="Password"><br><br>
  <input type="submit" value="Login">
</form>


</body>
</html>