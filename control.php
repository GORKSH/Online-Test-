<?php 
include "connect.php";
$functionName=$_POST['functionName'];


if($functionName=="signIn")
  {
	$credentials = $_POST['credentials'];
	$password = $_POST['password'];
	$passwordMd5=md5($password);
    echo $user->signIn($credentials,$passwordMd5);
	
  }

else if($functionName=="signUp")
  {
	  $userName = $_POST['userName'];
	  $contact = $_POST['contact'];
	  $password1 = $_POST['password1'];
	  $passwordMd51=md5($password1);
	  $emailId = $_POST['emailId'];
	  echo $user->signUp($userName,$contact, $emailId,$passwordMd51);
	  
  }

 else if($functionName=="logout")
    {
      echo $user->logout(); 
	}
else if($functionName=="createTable")
	{
	  $noOfQuestion=$_POST["noOfQuestion"];
	  $nameOfTest=$_POST["nameOfTest"];
	  $nameOfSubject=$_POST["nameOfSubject"];
	  echo $user->createTable($noOfQuestion,$nameOfTest,$nameOfSubject);
	}
else if($functionName=="destroyTable")
	{

	  $tableName=$_SESSION['nameOfTest'];
	  echo $user->destroyTable($tableName);
	}
else if($functionName=="createPaper")
	{
	  $tableName=$_SESSION['nameOfTest'];
	  $queryString1=$_POST['queryString1'];
	  $queryString2=$_POST['queryString2'];
	  echo $user->createPaper($queryString1,$queryString2,$tableName);
	}	
?>