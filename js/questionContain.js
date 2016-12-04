$(document).ready(function(){
	$("#nextPage").click(function(){
		noOfQuestion=$("#noOfQuestions").val();
		$.ajax({
		url:"paperSet2.php",
		data:{noOfQuestion:noOfQuestion},
		type:"POST",
		success: function(result){
			alert(result);
		   }
		});
		if(noOfQuestion>0)
		{
			
			window.location="paperSet2.php";
			
		}
		else
		{
			
			alert("enter valid no of questions");
		}
});
});

    



