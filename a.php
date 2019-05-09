<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

if(isset($_SESSION['username'], $_SESSION['password'])){
    echo $_SESSION['username']; 
    echo 'Welcome!!! You have access';
} else{
    header('Location: login.php');
    exit;
}
?>
<form action="destroy.php">
<input type="submit" value="Kill Session">
</form>

</body>
</html>