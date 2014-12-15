<?php
	include "inc/phrases.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sometimes it's hard these days to tell the difference between things that once seemed quite distinct. The designers of Ikea or Death recently identified an uncanny similarity between the names of flatpack furniture products and death metal bands. Now musical names have begun to creep into politics. Or is it the other way around?  In May of 2014, Europeans voted both for their favorite political parties and for their favorite pop songs, and the similarities are just too obvious to ignore. It is unlikely that anybody in 1979 would have confused 'the Christian Democratic Party of Italy' (the top European Parliament vote-getter) with 'Hallelujah' (the Eurovision-winning song). But this year we had 'We Can' and 'Change'. One of them is a song. One of them is a party. But which is which? And this is no isolated incident. Party names sound more like songs and songs sound more like parties.  If you don't believe it, try the following quiz: Party or Popsong?">
    <meta name="author" content="Kevin Deegan-Krause">
    <link rel="icon" href="images/favicon.ico">

    <title>Party or Pop Song?</title>

    <!-- Bootstrap core CSS -->
    <link href="inc/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/stylesheet.css" rel="stylesheet">    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">            
            <li><a href="./">Home</a></li>
            <li><a href="./instructions.php">Quiz</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jump to Question<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              	<?php
              		$count = 1;
              		foreach ($q_phrases as $q){
              			if ($q != "placeholder"){
              				echo "<li><a href='./quiz.php?q=$count'>$q</a></li>";
              				$count = $count + 1;	
              			}              			
              		}                	
            	?>
              </ul>
            </li>
            <li><a href="./about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->        
      </div>
    </div>