<?php 
	include "inc/header.php" ;
	// quiz phrases
	$q_phrases = Array(
		"placeholder",		
		"The River",
		"Party for Everybody",
		"There is a Future",
		"The Voice",
		"Ordinary People",
		"The Way of Courage",
		"Rise Up",
		"New Tomorrow",
		"Something Better",
		"Dawn",
		"Change",
		"We Can",
		"I Believe"
	);

	// get q number
	$q_num = $_GET['q'];

	// finis
	if ($q_num > 13) {
		header( 'Location: ./finis.php' ) ;
	}
?>

    <!-- Begin page content -->
    <div class="container">
			      

	 	 <!-- quiz pane -->
	 	 <div id="quiz_canvas">
		      <div id="the_phrase" class="row">
		        <h1>"<strong><span id="phrase_text"><?php echo $q_phrases[$q_num]; ?></span></strong>"</h1>
		      </div>
		       <div class="row">
		        <div class="col-md-6">
		          <img src="img/quiz/party.jpg" id="party_img" class="selection img-rounded img-responsive" onclick="showAns('par','<?php echo "q$q_num"; ?>')" >          
		        </div>				       
		        <div class="col-md-6">
		          <img src="img/quiz/popsong.jpg" id="pop_song_img" class="selection img-rounded img-responsive" onclick="showAns('pop','<?php echo "q$q_num"; ?>')" >          
		        </div>		        
		      </div>
	      </div>

      	<!-- party answer pane -->
	      <div id="par_ans">
	      	<div id="the_phrase" class="row">
		        <h1>"<strong><span id="phrase_text"><?php echo $q_phrases[$q_num]; ?></span></strong>"</h1>
		      </div>
		      <div class="row">
		        <div class="col-md-6">
		          <a href="./quiz.php?q=<?php echo $q_num + 1; ?>">
		          	<img src="img/quiz/ans/q<?php echo $q_num; ?>par.jpg" class="img-rounded img-responsive">          
	          	  </a>
		        </div>
		        <div class="col-md-6 ans_text text">		        
		          <p>(more text...) Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
		          <a href="./quiz.php?q=<?php echo $q_num + 1; ?>">
		          	<h2>next...</h2>
	          	  </a>
		        </div>        
		      </div>      		       
	      </div>

      	<!-- pop song answer pane -->
	      <div id="pop_ans">
	      	<div id="the_phrase" class="row">
		        <h1>"<strong><span id="phrase_text"><?php echo $q_phrases[$q_num]; ?></span></strong>"</h1>
		      </div>
		      <div class="row">		        
		        <div class="col-md-6 ans_text text">		          
		          <p>(more text...) Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
		          <a href="./quiz.php?q=<?php echo $q_num + 1; ?>">
		          	<h2>next...</h2>
	          	  </a>
		        </div>        
		        <div class="col-md-6">
		        	<a href="./quiz.php?q=<?php echo $q_num + 1; ?>">
		          		<img src="img/quiz/ans/q<?php echo $q_num; ?>pop.jpg" class="img-rounded img-responsive">          
	          		</a>
		        </div>
		      </div>      		       
	      </div>
	     		      
	  	
    </div> <!-- close container -->

<?php include "inc/footer.php" ?>