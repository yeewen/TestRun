<?php
session_start();
if (!isset($_SESSION['myusername'])) {
    header("location:index.php");
}
?>

<html>
    <body>
        Login Successful
        <h1>
        	<?php echo ($_SESSION['myusername']) ?>
        </h1>
        <a href="logout.php">HERE</a>
    </body>

</html>