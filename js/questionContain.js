$(document).ready(function(){
	$("#nextPage").click(function(){
		nameOfTest=$("#nameOfTest").val();
		noOfQuestion=$("#noOfQuestions").val();
		nameOfSubject=$('#nameOfSubject').val();
		$.ajax({
		url:"paperSet2.php",
		data:{noOfQuestion:noOfQuestion,nameOfTest:nameOfTest,nameOfSubject:nameOfSubject},
		type:"POST",
		success: function(result){
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
	$("#nextPage").click(function(){
		nameOfTest=$("#nameOfTest").val();
		noOfQuestion=$("#noOfQuestions").val();
		nameOfSubject=$('#nameOfSubject').val();
		$.ajax({
		url:"control.php",
		data:{noOfQuestion:noOfQuestion,nameOfTest:nameOfTest,nameOfSubject:nameOfSubject,functionName:"createTable"},
		type:"POST",
		success: function(result){
			alert(result);
		   }
		});

	});
	$("#deletePaper").click(function(){
		$.ajax({
		url:"control.php",
		data:{functionName:"destroyTable"},
		type:"POST",
		success: function(result){
			window.location="paperSet1.php";
		   }
		});

	});
	$("#createPaper").click(function(){
		var counter1=0,amp_counter1='',queryString1='';
	    $('.question').each(function(i, obj) {
        if (counter1 != 0)
            amp_counter1 = '&';
        else 
        	counter1 = 1;
        queryString1 += amp_counter1 +$(this).val();
        
        });
        var counter2=0,amp_counter2='',queryString2='';
	    $('.answer').each(function(i, obj) {
        if (counter2 != 0)
            amp_counter2 = '&';
        else 
        	counter2 = 1;
        queryString2 += amp_counter2 +$(this).val();
        
        });
	    console.log(queryString2);
		$.ajax({
		url:"control.php",
		data:{functionName:"createPaper",queryString1:queryString1 , queryString2:queryString2},
		type:"POST",
		success: function(result){
			alert(result);
		   }
		});

	});	
});

    



