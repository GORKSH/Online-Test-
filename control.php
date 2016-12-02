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
?>