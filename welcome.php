<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Website</title>
</head>
<body>
<?php 
    include_once 'header.inc'; 
?>

<?php
    session_start();
    if(isset($_SESSION['user'])) {
        echo "Welcome, " .$_SESSION['user'];
     } else {
        header('Location:login.php');
    }
?>
<?php 
    include_once 'footer.inc'; 
?>
</body>
</html>
