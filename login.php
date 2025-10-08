<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Website</title>
</head>
<body>
<?php 
    include_once ('header.inc'); 
?>

<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="hidden" name="token" value="J24042195">
    <input type="submit" value="Login">
</form>

<?php 
    include_once 'footer.inc'; 
?>
</body>
</html>

    
