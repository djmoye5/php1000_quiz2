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
<input type="submit" action="destroy.php" value="Kill Session">

</body>
</html>