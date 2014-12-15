<?php

	include "inc/phrases.php";

	// get q number
	$q_num = $_GET['q'];

	// finis
	if ($q_num > count($ans_text_array)) {
		header( 'Location: ./finis.php' ) ;
	}

	// otherewise, continue
	include "inc/header.php" ;
	
?>

    <!-- Begin page content -->
    <div id="main_container" class="container">			      

	 	 <!-- quiz pane -->
	 	 <div id="quiz_canvas">
		      <div id="the_phrase" class="row text-center">
		        <h1><strong><span id="phrase_text" style="font-size:200%;">"<?php echo $q_phrases[$q_num]; ?>"</span></strong></h1>
		      </div>		      
		       <div class="row">
		        <div class="col-md-5">
			      <div class="selection">	
			        <img src="img/quiz/party.jpg" id="party_img" class="img-rounded img-responsive center-block" onclick="showAns('par','<?php echo "q$q_num"; ?>')" >          
		          </div>
		        </div>
		        <div class="col-md-2 quiz_vert text-center">
		          <h1 style="font-size:600%;">or</h1>
		        </div> 				       
		        <div class="col-md-5">
		          <div class="selection">
		            <img src="img/quiz/popsong.jpg" id="pop_song_img" class="img-rounded img-responsive center-block" onclick="showAns('pop','<?php echo "q$q_num"; ?>')" >          
	              </div>
		        </div>		        
		      </div>
	      </div>

      	<!-- PARTY ANSWER PANE -->
		<div id="par_ans">
			<div id="the_phrase" class="row text-center">
				<h1>"<strong><span id="phrase_text"><?php echo $q_phrases[$q_num]; ?></span></strong>"</h1>
			</div>
			<div class="row results">
				<div class="col-md-6">
					<a href="./quiz.php?q=<?php echo $q_num + 1; ?>">
					<img src="img/quiz/ans/q<?php echo $q_num; ?>par.jpg" class="img-rounded img-responsive center-block">          
					</a>
				</div>
				<div class="col-md-6 ans_text text">		        
					<p><?php echo $ans_text_array["ans".$q_num]; ?></p>
				</div>		        
				<div class="row">
					<div id="nav_button" class="col-md-12">
						<?php	          	  		
							if ($q_num < count($ans_text_array)){
								echo '<a style="text-align:center;" href="./quiz.php?q='.($q_num + 1).'"><button type="button" class="input-block-level btn-success go_button">Next</button></a>';
							}
							else {
								echo '<a style="text-align:center;" href="./quiz.php?q='.($q_num + 1).'"><button type="button" class="input-block-level btn-success go_button">Go to scores</button></a>';
							}
						?>
					</div>
				</div>
			</div>        
		</div>

      	<!-- POP SONG ANSWER PANE -->
		<div id="pop_ans">
			<div id="the_phrase" class="row text-center">
				<h1>"<strong><span id="phrase_text"><?php echo $q_phrases[$q_num]; ?></span></strong>"</h1>
			</div>
			<div class="row results">		        
				<div class="col-md-6 ans_text text">		          
					<p><?php echo $ans_text_array["ans".$q_num]; ?></p>		          
				</div>        
				<div class="col-md-6 ans_image">
					<a href="./quiz.php?q=<?php echo $q_num + 1; ?>">
					<img src="img/quiz/ans/q<?php echo $q_num; ?>pop.jpg" class="img-rounded img-responsive center-block">          
					</a>
				</div>
					<div class="row">
						<div id="nav_button" class="col-md-12">
							<?php	          	  		
							if ($q_num < count($ans_text_array)){
								echo '<a style="text-align:center;" href="./quiz.php?q='.($q_num + 1).'"><button type="button" class="input-block-level btn-success go_button">Next</button></a>';
							}
							else {
								echo '<a style="text-align:center;" href="./quiz.php?q='.($q_num + 1).'"><button type="button" class="input-block-level btn-success go_button">Go to scores</button></a>';
							}
							?>
						</div>
				</div>
			</div>      		       
		</div>
	     		      
	  	
    </div> <!-- close container -->

<?php include "inc/footer.php" ?>
