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
		"I Believe",
		"Bright Future"
	);

	$ans_text_array = Array(
		"ans1" => "\"The River\" (To Potami/Το Ποτάμι) is a Greek political party founded by television journalist  Stavros Theodorakis.  It acknowledges not having a clear political profile but leans to the center-left (<a target='_blank' href='http://en.wikipedia.org/wiki/The_River_%28Greece%29'>Wikipedia</a>).  Founded in late February 2014, it gained 6.6% in the May 2014 European Parliament election.",

		"ans2" => "\"Party for Everybody\" was Russia's entry in the 2013 Eurovision Song Contest (<a target='_blank' href='http://www.youtube.com/watch?v=WKNRGc71hjc'>YouTube</a>).  Sung by the Buranovskiye Babushki (The Grannies from Buranovo), it featured a mix of English, Russian and Udmurt and finished in second place with a highly respectable 259 points.",

		"ans3" => "\"There Is a Future\" (Yesh Atid/יֵשׁ עָתִיד) is an Israeli political party founded by television journalist Yair Lapid.  Founded in January 2012, the party gained 14.3% of the vote, becoming the second largest delegation in the Knesset. (<a target='_blank' href='http://en.wikipedia.org/wiki/Yesh_Atid'>Wikipedia</a>)",

		"ans4" => "Voice (\"Vox\") is both a Spanish political party created in December 2013 by former members of the People's Party, receiving 1.6% in the 2014 European Parliament Elections (<a target='_blank' href='http://en.wikipedia.org/wiki/Vox_%28Spanish_political_party%29'>Wikipedia</a>), <strong>and</strong>  the Swedish entry in the 2009 Eurovision Song Contest (La Voix), which despite (or because of) some lightbulb-blowing high notes, received only 33 votes and placed 21st out of 25 competitors (<a target='_blank' href='www.youtube.com/watch?v=5WH2OwJeMBE'>YouTube</a>).",

		"ans5" => "\"Ordinary People\" (Obyčajní Ľudia) is a political party in Slovakia created in October 2011 by entrepreneur and maverick parliamentary deputy Igor Matovič which won 8.55% of the vote in Slovakia's March 2010 election, (<a target='_blank' href='http://en.wikipedia.org/wiki/Ordinary_People_%28Slovakia%29'>Wikipedia</a>).  Matovič first gained prominence in the 2010 election when he and three close colleagues, made skillful use of local media and preference voting to propel themselves from the last four places on the list of the Freedom and Solidarity to the top of the list.  They had used the name Ordinary People to describe their grouping but did make the move to transform it into a party until shortly before the election.  On arriving at the Ministry of the Interior, they were informed that another dormant party had earlier that day changed /its/ name to Ordinary People and that the name was therefore taken, forcing Matovič to adopt the name \"Ordinary People and Independent Personages.\"",

		"ans6" => "\"The Way of Courage\" (Drąsos Kelias) is a Lithuanian political party which received 8.3% of the vote in the October 2012 parliamentary election, having been founded in March 2012 by Neringa Venckienė (<a target='_blank' href='http://en.wikipedia.org/wiki/The_Way_of_Courage'>Wikipedia</a>).  Venckienė is sister of Drąsius Kedys, who had gained prominence with accusations of a pedophile ring among leading politicians and jurists, and who was found dead under unclear circumstances after being declared a suspect in the murders of two of those he had previously accused.  Venckienė rose to prominence in the aftermath and founded Way of Courage, but she left Lithuania unnanounced in November 2013 rather than face corruption charges and her whereabouts are unknown (though Lithuanian police claim that witnesses have spotted her in Chicago, IL, USA)",

		"ans7" => "\"Rise Up\" was Greece's entry in the 2014 Eurovision Song Contest (<a target='_blank' href='www.youtube.com/watch?v=c9y6A1uXLn8'>YouTube</a>).  Sung by Freaky Fortune and featuring RiskyKidd, it received only 35 votes and placed 20th out of 25 songs.  Its video featured a gymnast on a trampoline, causing BBC commentator Martin Faulkner to note that, \"I think they're going for clever choreography, but it risks looking more like bouncy castle playtime at a children's birthday party.\"(<a target='_blank' href='http://www.bbc.co.uk/programmes/articles/3D2qkjsfHqkmFDjdCVF93FV/eurovision-song-contest-final-song-reviews'>BBC</a>).",

		"ans8" => "\"New Tomorrow\" was Denmark's entry in the 2011 Eurovision Song Contest (<a target='_blank' href='www.youtube.com/watch?v=p_fFy5Icbh0'>YouTube</a>).  Sung by the band, \"A Friend in London\", it gained 134 points and a respectable 5th place showing.  The song almost belongs in the \"Both\" category as it was used in 2013 as the campaign song of Malta's Labour Party (<a target='_blank' href='http://www.youtube.com/watch?v=88EFGgqKxeY'>YouTube</a>).",

		"ans9" => "\"Something Better\" was Finland's entry in the 2014 Eurovision Song Contest (<a target='_blank' href='www.youtube.com/watch?v=3FDWaFfo1CU'>YouTube</a>).  Sung by Softengine, the song gained 72 points and an 11th place showing.",

		"ans10" => "\"Dawn\" is the name of a number of political parties, most recently Dawn of Direct Democracy (Úsvit přímé demokracie), founded in June 2013 by Czech-Japanese entrepreneur and senator Tomio Okamua, which gained 6.9% of the vote in the October 2013 elections (<a target='_blank' href='http://en.wikipedia.org/wiki/Dawn_of_Direct_Democracy'>Wikipedia</a>); the name is also used by Greece's far-right \"Golden Dawn\" (Chrysí Avgí/Χρυσή Αυγή which is not new but rapidly transformed from minor political player to a strong candidate in Greece's 2012 elections (<a target='_blank' href='http://en.wikipedia.org/wiki/Golden_Dawn_%28political_party%29'>Wikipedia</a>); the name is also used by \"Dawn\" (Úsvit) a minor political splinter from the Slovak Communist Party.",

		"ans11" => "\"Change\" was Romania's entry in the 2011 Eurovision Song Contest (<a target='_blank' href='http://www.youtube.com/watch?v=1q1WpOTpZ1A'>YouTube</a>).  Sung by Hotel FM, the song gained 77 points and a 17th place showing, receiving the coveted \"douze points\" (twelve points) not only from neighboring Moldova but also from Italy.",

		"ans12" => "\"We Can\" (Podemos) is a Spanish political party led by writer and political commentator Pablo Iglesias Turrión and citing as its inspiration the Greek left-wing party SYRIZA (<a target='_blank' href='http://en.wikipedia.org/wiki/Podemos_%28Spanish_political_party%29'>Wikipedia</a>).  Although founded in January of 2014, It received 8.0% in theMay 2014 European Parliament elections.",

		"ans13" => "\"I Believe\" (Verjamem) is both a Slovenian political party (<a target='_blank' href='http://en.wikipedia.org/wiki/Verjamem'>Wikipedia</a>) founded by Igor Šoltes, a lawyer and former president of Slovenia's audit court and Slovenia's entry in the 2012 Eurovision Song Contest (<a target='_blank' href='https://www.youtube.com/watch?v=jEHNRKnrWiU'>YouTube</a>) sung by Eva Boto.  After five months of competitions, Boto won Slovenia’s grueling EMA sing-off in February 2012 but three months later it got only got 31 points in the semi-final, finishing 17th out of 18 contestants.  Šoltes’ party had an even quicker rise and fall:  founded in March of 2014 the party managed 10.5% in the May 2014 European Parliament elections but did not even crack the 1% mark in the July 2014 elections to the Slovenian parliament (having been supplanted by the even newer Party of Miro Cerar).",

		"ans14" => "<p>Bright Future (Björt framtíð, BF, <a target='_blank' href='http://en.wikipedia.org/wiki/Bright_Future_%28Iceland%29'>Wikipedia</a>) is an Icelandic political party with six seats in the 63 seat parliament, the Althing (Alþingi).  Bright Future has close ties to the Best Party (Besti flokkurinn, also BF, <a target='_blank' href='http://en.wikipedia.org/wiki/Best_Party'>Wikipedia</a>), which won the Reykjavik city council election in 2010 under the leadership of comedian, actor and musician Jón Gnarr, who promised “A polar bear display for the zoo. Free towels at public swimming pools and a “drug-free Parliament by 2020” (<a target='_blank' href='http://www.nytimes.com/2010/06/26/world/europe/26iceland.html?_r=0\'>New York Times</a>) and announced on taking office that \"No one has to be afraid of the Best Party,\" he said, \"because it is the best party. If it wasn’t, it would be called the Worst Party or the Bad Party. We would never work with a party like that.\"</p><p>One of BF’s parliamentary deputies, musician Óttarr Proppé—lead singer of the Icelandic band Dr. Spock—sang backup vocals for Iceland’s 2014 Eurovision entry Pollapönk, a kidpunk band, whose song “No prejudice” could itself be a viable party name.   Proppé, pictured here in the cone of light, is the first sitting member of a national parliament to participate in the Eurovision song contest.  He is certainly not the last.</p>"	
		);


	// get q number
	$q_num = $_GET['q'];

	// finis
	if ($q_num > count($ans_text_array)) {
		header( 'Location: ./finis.php' ) ;
	}
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
