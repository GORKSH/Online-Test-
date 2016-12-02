<?php
session_start();
echo $_SESSION['userName'];

?>
<html

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?php echo $_SESSION['userName'];?></title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body >

    <button id="logoutButton">logOut</button>
    <script src="js/jquery.js"></script>
    <script src="js/login.js"></script>

</body>
</html>
