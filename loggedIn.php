<?php
session_start();
if (!isset($_SESSION['userName']))
	header("location:index.php");
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?php echo $_SESSION['userName'];?></title>
  <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
  <link rel="stylesheet" href="css/loggedIn.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body >
    <div id="background-div">
        <img src="image/image.jpg" />
    </div>
    <div class="top" /></div>
    <div class="container-loggedIn">
    	<img src="image/shubham.png" />
    	<div ><?php echo $_SESSION['userName'];?></div>
    	<img src="image/logout.png" id="logoutButton" />
    </div>
    <div id="contain">
		<div class="container-previous">
	       <h1>Previous Question Papers .</h1>
	       
	  	</div>    
	   	<div class="container-setpaper">
	       <h1>Set a new question paper for the students .</h1>
	       <button  id="setPaperButton" />Set Paper</button>
	  	</div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/login.js"></script>

</body>
</html>
