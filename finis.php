<?php include "inc/header.php" ?>

    <!-- Begin page content -->
    <div class="container">
      
      <div class="row">
        <div id="quiz_logo" class="col-md-6">
          <img src="img/quiz/quiz_logo.jpg" alt="quiz_logo" class="img-rounded img-responsive" >
        </div>
        <div id="splash_text" class="text col-md-6">
          <h2>Thanks for playing!</h2>
          <h2>You scored <span id="score"></span> / <?php echo count($q_phrases); ?></h2>
          <script type="text/javascript">
            var score = getScore();
            $("#score").html(score);
          </script>
        </div>
      </div>      
      
    </div>

<?php include "inc/footer.php" ?>