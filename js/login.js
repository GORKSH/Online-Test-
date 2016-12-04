$(document).ready(function(){
	var credentaials , password ;
	var userName , contact , emailId , password1 , password2 ;
	var signInFlag=0 ,signUpFlag=0;
	var functionName;

	function signInClick()
	{
		credentials=$("#credentials").val();
		password   =$("#password").val();

	}

	function signInValidation()
	{
		signInClick();
		if(credentials=='' || password=='')
		{
          alert("required field");
          signInFlag=0;
		}
		else
		  signInFlag=1;

	}

  
	$("#signInButton").click(function(){
		signInValidation();
		if(signInFlag==1)
		{
			// alert(credentials +" " +password);
			$.ajax({
					url:"control.php",
					data:{credentials:credentials,password:password,
					functionName:"signIn"},
					type:"POST",
					success: function(result){
						if(result=="true")
						{
							window.location="loggedIn.php";
						}
					}
			});
		}
		else
			alert("all not filled");

	});

  



    function signUpClick()
	{
		userName=$("#userName").val();
		contact =$("#contact").val();
		emailId  =$("#emailId").val();
		password1=$("#password1").val();
		password2=$("#password2").val();
	}
	function signUpValidation()
	{
		signUpClick();
		if(userName=='' || contact=='' || emailId=='' || password1=='' ||password2=='')
		{
          alert("required field");
          signUpFlag=0;
		}
		else
		  signUpFlag=1;

	} 
	$("#signUpButton").click(function(){
		signUpValidation();
		if(signUpFlag==1)
		{
			// alert("all filled : "+userName +" "+contact+" "+emailId+" " + password1 + " "+password2);
			$.ajax({
				url:"control.php",
				data:{userName:userName,
					contact:contact,
					password1:password1,
                    emailId:emailId,
					functionName:"signUp"},
					type:"POST",
					success: function(result){
					alert(result);
				}
			});
		}
		else
			alert("all not filled");

	});	

 
	$("#logoutButton").click(function(){
			$.ajax({
				url:"control.php",
				data:{
					functionName:"logout"},
					type:"POST",
					success: function(result){
						if(result=="loggedOut")
						{
							window.location="index.php";
						}
					 
				}
			});
		
		

	});
	$("#setPaperButton").click(function(){
		window.location="paperSet1.php";

	});





});