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

	$ans_text_array = Array(
		"ans1" => "\"The River\" (To Potami/Το Ποτάμι) is a Greek political party founded by television journalist  Stavros Theodorakis.  It acknowledges not having a clear political profile but leans to the center-left (<a href='http://en.wikipedia.org/wiki/The_River_%28Greece%29'>http://en.wikipedia.org/wiki/The_River_%28Greece%29</a>).  Founded in late February 2014, it gained 6.6% in the May 2014 European Parliament election.",
		"ans2" => "\"Party for Everybody\" was Russia's entry in the 2013 Eurovision Song Contest (<a href='http://www.youtube.com/watch?v=WKNRGc71hjc'>www.youtube.com/watch?v=WKNRGc71hjc</a>).  Sung by the Buranovskiye Babushki (The Grannies from Buranovo), it featured a mix of English, Russian and Udmurt and finished in second place with a highly respectable 259 points.",
		"ans3" => "\"There Is a Future\" (Yesh Atid/יֵשׁ עָתִיד) is an Israeli political party founded by television journalist Yair Lapid.  Founded in January 2012, the party gained 14.3% of the vote, becoming the second largest delegation in the Knesset. (<a href='http://en.wikipedia.org/wiki/Yesh_Atid'>http://en.wikipedia.org/wiki/Yesh_Atid</a>)",
		"ans4" => "Voice (\"Vox\") is both a Spanish political party created in December 2013 by former members of the People's Party, receiving 1.6% in the 2014 European Parliament Elections (<a href='http://en.wikipedia.org/wiki/Vox_%28Spanish_political_party%29'>http://en.wikipedia.org/wiki/Vox_%28Spanish_political_party%29</a>), <strong>and</strong>  the Swedish entry in the 2009 Eurovision Song Contest (La Voix), which despite (or because of) some lightbulb-blowing high notes, received only 33 votes and placed 21st out of 25 competitors (<a href='www.youtube.com/watch?v=5WH2OwJeMBE'>www.youtube.com/watch?v=5WH2OwJeMBE</a>).",
		"ans5" => "\"Ordinary People\" (Obyčajní Ľudia) is a political party in Slovakia created in October 2011 by entrepreneur and maverick parliamentary deputy Igor Matovič which won 8.55% of the vote in Slovakia's March 2010 election, (<a href='http://en.wikipedia.org/wiki/Ordinary_People_%28Slovakia%29'>http://en.wikipedia.org/wiki/Ordinary_People_%28Slovakia%29</a>).  Matovič first gained prominence in the 2010 election when he and three close colleagues, made skillful use of local media and preference voting to propel themselves from the last four places on the list of the Freedom and Solidarity to the top of the list.  They had used the name Ordinary People to describe their grouping but did make the move to transform it into a party until shortly before the election.  On arriving at the Ministry of the Interior, they were informed that another dormant party had earlier that day changed /its/ name to Ordinary People and that the name was therefore taken, forcing Matovič to adopt the name \"Ordinary People and Independent Personages.\"",
		"ans6" => "\"The Way of Courage\" (Drąsos Kelias) is a Lithuanian political party which received 8.3% of the vote in the October 2012 parliamentary election, having been founded in March 2012 by Neringa Venckienė (<a href='http://en.wikipedia.org/wiki/The_Way_of_Courage'>http://en.wikipedia.org/wiki/The_Way_of_Courage</a>).  Venckienė is sister of Drąsius Kedys, who had gained prominence with accusations of a pedophile ring among leading politicians and jurists, and who was found dead under unclear circumstances after being declared a suspect in the murders of two of those he had previously accused.  Venckienė rose to prominence in the aftermath and founded Way of Courage, but she left Lithuania unnanounced in November 2013 rather than face corruption charges and her whereabouts are unknown (though Lithuanian police claim that witnesses have spotted her in Chicago, IL, USA)",
		"ans7" => "\"Rise Up\" was Greece's entry in the 2014 Eurovision Song Contest (<a href='www.youtube.com/watch?v=c9y6A1uXLn8'>www.youtube.com/watch?v=c9y6A1uXLn8</a>).  Sung by Freaky Fortune and featuring RiskyKidd, it received only 35 votes and placed 20th out of 25 songs.  Its video featured a gymnast on a trampoline, causing BBC commentator Martin Faulkner to note that, \"I think they're going for clever choreography, but it risks looking more like bouncy castle playtime at a children's birthday party.\"(<a href='http://www.bbc.co.uk/programmes/articles/3D2qkjsfHqkmFDjdCVF93FV/eurovision-song-contest-final-song-reviews'>http://www.bbc.co.uk/programmes/articles/3D2qkjsfHqkmFDjdCVF93FV/eurovision-song-contest-final-song-reviews</a>).",
		"ans8" => "\"New Tomorrow\" was Denmark's entry in the 2011 Eurovision Song Contest (<a href='www.youtube.com/watch?v=p_fFy5Icbh0'>www.youtube.com/watch?v=p_fFy5Icbh0</a>).  Sung by the band, \"A Friend in London\", it gained 134 points and a respectable 5th place showing.  The song almost belongs in the \"Both\" category as it was used in 2013 as the campaign song of Malta's Labour Party (<a href='http://www.youtube.com/watch?v=88EFGgqKxeY'>http://www.youtube.com/watch?v=88EFGgqKxeY</a>).",
		"ans9" => "\"Something Better\" was Finland's entry in the 2014 Eurovision Song Contest (<a href='www.youtube.com/watch?v=3FDWaFfo1CU'>www.youtube.com/watch?v=3FDWaFfo1CU</a>).  Sung by Softengine, the song gained 72 points and an 11th place showing.",
		"ans10" => "\"Dawn\" is the name of a number of political parties, most recently Dawn of Direct Democracy (Úsvit přímé demokracie), founded in June 2013 by Czech-Japanese entrepreneur and senator Tomio Okamua, which gained 6.9% of the vote in the October 2013 elections (<a href='http://en.wikipedia.org/wiki/Dawn_of_Direct_Democracy'>http://en.wikipedia.org/wiki/Dawn_of_Direct_Democracy</a>); the name is also used by Greece's far-right \"Golden Dawn\" (Chrysí Avgí/Χρυσή Αυγή which is not new but rapidly transformed from minor political player to a strong candidate in Greece's 2012 elections (<a href='http://en.wikipedia.org/wiki/Golden_Dawn_%28political_party%29'>http://en.wikipedia.org/wiki/Golden_Dawn_%28political_party%29</a>); the name is also used by \"Dawn\" (Úsvit) a minor political splinter from the Slovak Communist Party.",
		"ans11" => "\"Change\" was Romania's entry in the 2011 Eurovision Song Contest (<a href='http://www.youtube.com/watch?v=1q1WpOTpZ1A'>http://www.youtube.com/watch?v=1q1WpOTpZ1A</a>).  Sung by Hotel FM, the song gained 77 points and a 17th place showing, receiving the coveted \"douze points\" (twelve points) not only from neighboring Moldova but also from Italy.",
		"ans12" => "\"We Can\" (Podemos) is a Spanish political party led by writer and political commentator Pablo Iglesias Turrión and citing as its inspiration the Greek left-wing party SYRIZA (<a href='http://en.wikipedia.org/wiki/Podemos_%28Spanish_political_party%29'>http://en.wikipedia.org/wiki/Podemos_%28Spanish_political_party%29</a>).  Although founded in January of 2014, It received 8.0% in theMay 2014 European Parliament elections.",
		"ans13" => "\"I Believe\" (Verjamem) is both a Slovenian political party founded by Igor Šoltes, a lawyer and former president of Slovenia's audit court--founded in the spring of 2014 it managed 10.5% in the May 2014 European Parliament elections--and Slovenia's entry in the 2012 Eurovision Song Contest sung by Eva Boto--gaining 31 points and a 17th place finish.  In the first weeks of the founding of the <em>party</em>, internet searches in both Slovene and English pointed almost exclusively to the <em>song</em>."		
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

      	<!-- PARTY ANSWER PANE -->
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
		          <p><?php echo $ans_text_array["ans".$q_num]; ?></p>
		          <a href="./quiz.php?q=<?php echo $q_num + 1; ?>">
		          	<h2>next...</h2>
	          	  </a>
		        </div>        
		      </div>      		       
	      </div>

      	<!-- POP SONG ANSWER PANE -->
	      <div id="pop_ans">
	      	<div id="the_phrase" class="row">
		        <h1>"<strong><span id="phrase_text"><?php echo $q_phrases[$q_num]; ?></span></strong>"</h1>
		      </div>
		      <div class="row">		        
		        <div class="col-md-6 ans_text text">		          
		          <p><?php echo $ans_text_array["ans".$q_num]; ?></p>
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
