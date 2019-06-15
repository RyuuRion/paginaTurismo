
$(document).ready(function(){
	var pass1= document.getElementById("password1");

	$(pass1).keyup(function(){
		var ucase = new RegExp("[A-Z]+");
		var lcase = new RegExp("[a-z]+");
		var num = new RegExp("[0-9]+");

		var pass2= document.getElementById("password2");
		var charComp=document.getElementById("8char");
		var upperCasteo=document.getElementById("ucase");
		var lowercasteo=document.getElementById("lcase");
		var numcast=document.getElementById("num");
		var pwmatch=document.getElementById("pwmatch");
		
		if($(pass1).val().length >= 8){
			$(charComp).removeClass("fa-times");
			$(charComp).addClass("fa-check");
			$(charComp).css("color","#00A41E");
		}else{
			$(charComp).removeClass("fa-check");
			$(charComp).addClass("fa-times");
			$(charComp).css("color","#FF0004");
		}
		
		if(ucase.test($(pass1).val())){
			$(charComp).removeClass("fa-times");
			$(charComp).addClass("fa-check");
			$(charComp).css("color","#00A41E");
		}else{
			$(charComp).removeClass("fa-check");
			$(charComp).addClass("fa-times");
			$(charComp).css("color","#FF0004");
		}
		
		if(lcase.test($(pass1).val())){
			$(lowercasteo).removeClass("fa-times");
			$(lowercasteo).addClass("fa-check");
			$(lowercasteo).css("color","#00A41E");
		}else{
			$(lowercasteo).removeClass("fa-check");
			$(lowercasteo).addClass("fa-times");
			$(lowercasteo).css("color","#FF0004");
		}
		
		if(num.test($(pass1).val())){
			$(numcast).removeClass("fa-times");
			$(numcast).addClass("fa-check");
			$(numcast).css("color","#00A41E");
		}else{
			$(numcast).removeClass("fa-check");
			$(numcast).addClass("fa-times");
			$(numcast).css("color","#FF0004");
		}
		
		if($(pass1).val() == $(pass2).val()){
			$(pwmatch).removeClass("fa-times");
			$(pwmatch).addClass("fa-check");
			$(pwmatch).css("color","#00A41E");
		}else{
			$(pwmatch).removeClass("fa-check");
			$(pwmatch).addClass("fa-times");
			$(pwmatch).css("color","#FF0004");
		}
	});
});

