<?php include("header.php");?>
<?php require_once("db_connection.php");?>
<?php require_once("functions.php");?>

<!-- Header -->
      <div id="header" class="skel-panels-fixed">

        <div class="top">

          <!-- Logo -->
            <div id="logo">
              <a href="index.php"><span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span></a>
              <a href="index.php"><h1 id="title">&lt;REAL-TIME STOCK&gt;</h1></a>
              <span class="byline">Predicting The Unpredictable</span>
            </div>

          <!-- Nav -->
            <nav>
              <ul>
                <li><a href="index.php"><span class="icon icon-home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a></li>
                
              </ul>
            </nav>
            <nav id="nav">
              <ul>
                
                <li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="icon icon-th">Opening Price Prediction</span></a></li>
                <li><a href="#closing" id="portfolio-link" class="skel-panels-ignoreHref"><span class="icon icon-th">Closing Price Prediction</span></a></li>
                
              </ul>
            </nav>
            
        </div>
        
        <div class="bottom">

          <ul class="icons">
              <li><a href="http://www.facebook.com/namratha-lb" target="_blank" class="icon icon-facebook"><span>Facebook</span></a></li>
              <li><a href="https://github.com/namratha-lb/Darl-Light" target="_blank" class="icon icon-github"><span>Github</span></a></li>
              <li><a href="mailto:namratha9823@gmail.com" class="icon icon-envelope"><span>Email</span></a></li>
            </ul>
        </div>
      
      </div>

      <div id="main">
			
				<!-- Intro -->
					<section id="top" class="one">
						<div class="container">
						<header><h3>Opening Price Prediction For <?php echo $_GET["stock"];?> : -</h3></header>
						<?php
	
							if (isset($_GET["stock"])) {
								$stock = $_GET["stock"];
								predict_for_opening_price($stock);
							}

						?>

						</div>
					</section>
					<section id="closing" class="two">
						<div class="container">
						<header><h3>Closing Price Prediction For <?php echo $_GET["stock"];?> : -</h3></header>
						<?php
	
							if (isset($_GET["stock"])) {
								$stock = $_GET["stock"];
								predict_for_closing_price($stock);
							}

						?>

						</div>
					</section>
		</div>

	</body>
</html>
