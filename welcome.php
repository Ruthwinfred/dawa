<?php
session_start();
if (!isset($_SESSION ['username'])){
    header("Location: Index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = 'utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <title>The login form -Winners Technology LTD</title>
</head>
<body>

<?php echo "<h1> Welcome"     .$_SESSION['username'] ."</h1>";?>
<a href = "logout.php">Logout</a>

</body>
</html>