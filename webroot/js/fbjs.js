$(document).ready(function(){
	$('#userBtn').click(function(){
		$('#friendbox').toggle();	
	});

 	$('.fa-comments').click(function(){
        $('#msgbox').toggle();
 	});

 	$('#msgtext').on('keydown',function(e){
 		if(e.which===13){
 			var msg = $('#msgtext').val();
 			$('#msgdisp').append(msg);
 			$('#msgtext').val("");
 		}
 	});
});