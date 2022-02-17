<?php
include('config.php');
session_start();
error_reporting(0);
if(isset($_SESSION['username'])){
    header('Location: welcome.php');
}
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header('Location: welcome.php');
    }else{
        echo "<script>alert('Whoops! Email or Password is wrong')</script>";
    }
}
?>

<!-- The login form -->
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
<div class="container">
          <form action="" method="POST" class="login-email">
              <p class="login-text" style="font-size:2rem; fornt weight:800;">Login</p>
              <div class="input-group">
                  <input type="text" placeholder="User name" name=email value="<?php echo $email; ?>" required>
              </div>
              <div class="input-group">
                  <input type="password" placeholder="Password" name=pass value="<?php echo $_POST['pass']; ?>" required>
              </div>
              <div class="input-group">
              <button name="submit" class="btn">Log in</button>
              </div>
              <p class="login-register-text">Not registered? <a href="register.php">Sign up </a>here.</p>
</form>
</div>  
    </body>
</html>
