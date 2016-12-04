<?php
session_start();
if (!isset($_SESSION['userName']))
	header('location:index.php');
if(isset($_POST['noOfQuestion']))
{
$_SESSION['noOfQuestion']=  $_POST['noOfQuestion'];
echo $_SESSION['noOfQuestion'];
}

?>

<!DOCTYPE html>
<html >
<head>

  <meta charset='UTF-8'>
  <title>Welcome <?php echo $_SESSION['userName'];?></title>
  <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> -->
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'> -->
 
  <link rel='stylesheet' href='css/loggedIn.css'>
  <link rel='stylesheet' href='css/style.css'>
</head>
<body >
    <div id='background-div'>
      <img src='image/image.jpg' />
    </div>
    <div class='top' /></div>
    <div class='container-loggedIn'>
      <img src='image/shubham.png' />
      <div ><?php echo $_SESSION['userName'];?></div>
      <img src='image/logout.png' id='logoutButton' />
    </div> 
    <div id='questionContainer' class='scroll'>Begin to set questions
    <ol id='questionContainerList'>
    <?php
    for($i=0;$i<$_SESSION['noOfQuestion'];$i++)
    {
      $qId=$i+1 ; $x=4*$i+1 ; $y=4*$i+2 ;$z=4*$i+3 ;$w=4*$i+4;
      echo "<li><div class='problem-container' ><input type='text' class='question' placeholder='question' id=question".$qId." /><input type='text' class='answer' placeholder='correct answer' id=answer".$x." /><input type='text' class='answer'  placeholder='incorrect answer' id=answer".$y." /><input type='text' class='answer'  placeholder='incorrect answer' id=answer".$z."/><input type='text' class='answer'  placeholder='incorrect answer' id=answer".$w." /></div></li>";
    }
    ?>
    </ol>
    </div>
    <script src='js/jquery.js'></script>
    <script src='js/login.js'></script>
    <script src='js/questionContain.js'></script>

</body>
</html>
