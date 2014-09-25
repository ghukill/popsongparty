
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
	$("#"+choice+"_ans").fadeIn(250);

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
})



