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
    <div id="paperDetails">Enter the details of the question paper </div>
    <div id="questionDetails">
      <input id="nameOfTest" type="text" placeholder="Name of test" />
      <input id="nameOfSubject" type="text" placeholder="Name of subject" />
      <input id="noOfQuestions" type="number" placeholder="No of questions" />
    </div>
    <div id="marksDetails">Enter the marking pattern of the question paper </div>
    <div id="marksNumber">
      <input id="marksCorrect" type="text" placeholder="Marks on correct answer" />
      <input id="marksIncorrect" type="text" placeholder="Marks on incorrect answer" />      
    </div>   
    <button  id="nextPage" />Continue</button> 
    
    <script src="js/jquery.js"></script>
    <script src="js/login.js"></script>
    <script src="js/questionContain.js"></script>

</body>
</html>
