<?php
// quiz phrases
	$q_phrases = Array(				
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

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
          <!-- <a class="navbar-brand" href="#">Party or Pop Song?</a> -->
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">            
            <li><a href="./">Home</a></li>
            <li><a href="./quiz.php?q=1">Quiz</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jump to Question <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              	<?php
              		$count = 1;
              		foreach ($q_phrases as $q){
              			echo "<li><a href='./quiz.php?q=$count'>\"$q\"</a></li>";
              			$count = $count + 1;
              		}                	
            	?>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>