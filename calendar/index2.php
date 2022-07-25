<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>
<!-- if I had it to go to thispage-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>

<a href="logout.php">Logout</a>
<h1>This is the index page</h1>

<br> <!-- if I wanted it to say Hello Username when logs in, in here-->
Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>