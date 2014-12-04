
var answers = {
	q1:"par",
	q2:"pop",
	q3:"par",
	q4:"both",
	q5:"par",
	q6:"par",
	q7:"pop",
	q8:"pop",
	q9:"pop",
	q10:"par",
	q11:"pop",
	q12:"par",
	q13:"both",
	q14:"par"
}

// prime score
if (localStorage.getItem('quiz_score') == null){
	localStorage.setItem('quiz_score',0);
}

// click listeners
function showAns(choice,qnum){
	console.log(choice,qnum);

	// show answer
	$("#quiz_canvas").hide();
	$("#"+choice+"_ans").fadeIn(250,resizeContainer);

	// check and store score
	if (answers[qnum] == choice || answers[qnum] == "both"){		
		var nscore =  parseInt(localStorage.getItem('quiz_score')) + 1;
		localStorage.setItem('quiz_score',nscore);
	}
}

function getScore(){
	return localStorage.getItem('quiz_score');
}

function resetScore(){
	localStorage.setItem('quiz_score',0);
}

// listener that resets score when hitting any navigation
// requires straight through playing to get score
$(document).ready(function(){
	$(".navbar").click(function(){
		resetScore();
	})
	// paints first time
	paintFooter();
})


function paintFooter(){
	var footer_html = ' <div class="footer"><div class="container text-center"><p class="text-muted">CC-BY, Kevin Deegan-Krause, <a href="mailto:kdecay@gmail.com">kdecay@gmail.com</a></p></div></div>';
	$("#footer").empty();
	$("#footer").html(footer_html);
}

// hack for mobile
function resizeContainer(){
	$("#main_container").css('height',($($(".results")[0]).height()+$($(".results")[1]).height()+200)+'px');
}



