$(document).ready(function(){
	
	$('#createPaper').click(function(e){

		$.generateFile({
			filename	: 'paper1.php',
			content		: "shubham",
			script		: 'download.php'
		});
		
		e.preventDefault();
	});
	
});