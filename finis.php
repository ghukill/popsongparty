<?php include "inc/header.php" ?>

    <!-- Begin page content -->
    <div class="container">
      
      <!-- <div class="row">

        <div class="col-md-6 left_finis">
          <img src="img/quiz/quiz_logo.jpg" alt="quiz_logo" class="img-rounded img-responsive">
        </div>

        <div class="text col-md-6 text-center" id="score_box">
          
          <h1 >Thanks for playing!</h1>
          <h2>Your score: <span id="score"></span> / <?php echo count($q_phrases); ?></h2>
          <script type="text/javascript">
            var score = getScore();
            $("#score").html(score);
          </script>          

        </div>

      </div>   -->    
      <div class="row text-center">       

        <div class="text col-md-12" id="score_box">
          
          <h2>Thanks for playing <a href="./index.php">Party or Popsong</a>!  Your score is: <span id="score"></span> / <?php echo count($q_phrases); ?></h2>
          <script type="text/javascript">
            var score = getScore();
            $("#score").html(score);
          </script>
          <h3>But before you go, there are three points worth making, two of them frivolous, one serious.</h3>          
        </div>

      </div>  
      <hr>
      <?php include "inc/about_text.php" ?>
      
    </div>


<script type="text/javascript">
// resets score when leaving page
  $(window).bind('beforeunload', function(){    
    resetScore();
  });
</script>
<?php include "inc/footer.php" ?>