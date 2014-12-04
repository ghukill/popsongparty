<?php include "inc/header.php" ?>

    <!-- Begin page content -->
    <div class="container">  
      <div class="row text-center">       

        <div class="text col-md-12" id="score_box">
          
          <h1>Thanks for playing <a href="./index.php">Party or Popsong</a>!  Your score is: <span id="score"></span> / <?php echo count($q_phrases); ?></h1>
          <script type="text/javascript">
            var score = getScore();
            $("#score").html(score);
          </script>
          <h4>But before you go, there are three points worth making, two of them frivolous, one serious.</h4>
        </div>

      </div>  
      <?php include "inc/about_text.php" ?>
      
    </div>


<script type="text/javascript">
// resets score when leaving page
  $(window).bind('beforeunload', function(){    
    resetScore();
  });
</script>
<?php include "inc/footer.php" ?>