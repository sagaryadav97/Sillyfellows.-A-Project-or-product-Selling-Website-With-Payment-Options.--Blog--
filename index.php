<!DOCTYPE html>

<?php


require 'conn.php';
$conn = Connect();
$query2 = "SELECT * FROM projects order by id desc";
$result = mysqli_query($conn, $query2);
if (mysqli_num_rows($result) > 0)
{

?>

<html lang="en">
  <head>
    <title>Silly Fellows</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="index.php">Home</a></li>
					<li><a href="index.php">Cg Projects</a></li>
					<li ><a href="FeedBack.php">FeedBack</a></li>
					<li><a href="Projectreq.php">Project Request</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h1 id="colorlib-logo" class="mb-4"><a href="index.php" style="background-image: url(images/bg_1.jpg);">Silly <span>Fellows</span></a></h1>
				<div class="mb-4">
					<h3>Join Telegram for More Updates</h3>
					<form action="#" class="colorlib-subscribe-form">
            <div class="form-group d-flex">
            	
              <button class="mt-2 btn btn-white submit"><a href="https://t.me/silly_fellow" class="mb-4 sidebar-heading"><span class="icon-paper-plane"></span> Click to Join </a></button>
            </div>
          </form>
				</div>
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	 	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Sillyfellow</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-xl-8 py-5 px-md-5">
					<center><a href="index.php" class="img img-2"> <img src="sf.png"></a></center>
	    				<div class="row pt-md-4">
						
						<?php
						
						  while($row = mysqli_fetch_assoc($result))
						  {
							  $user_Image = $row["image_link"];
						?>
						<div class="col-md-12">
							<form method="post" action="single.php">
								<div class="blog-entry ftco-animate d-md-flex">
									<a href="single.php?id=<?php echo $row["id"]; ?>" class="img img-2" style="background-image: url(<?php echo $row['image_link']; ?>);"></a>
										<div class="text text-2 pl-md-4">
											<h3 class="mb-2"><a href="single.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a></h3>
											<div class="meta-wrap">
												<p class="meta">
													<span><i class="icon-calendar mr-2"></i><?php echo $row["date"]; ?></span>
													<span><a href="single.html"><i class="icon-folder-o mr-2"></i><?php echo $row["cat"]; ?></a></span>
													<span><i class="icon-comment2 mr-2"></i></span>
												</p>
											</div>
											<p class="mb-4"><?php echo substr($row['des'], 0, 150);?></p>
											
											<p><a href="single.php?id=<?php echo $row["id"]; ?>" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
										</div>
								</div>
							</form>
			    		</div>
						<?PHP
						
							}
						}
						?>
					</div>
						
						<!-- END-->
			    		<!-- <div class="row">
			          <div class="col">
			            <div class="block-27">
			              <ul>
			                <li><a href="#">&lt;</a></li>
			                <li class="active"><span>1</span></li>
			                <li><a href="#">2</a></li>
			                <li><a href="#">3</a></li>
			                <li><a href="#">4</a></li>
			                <li><a href="#">5</a></li>
			                <li><a href="#">&gt;</a></li>
			              </ul>
			            </div>
			          </div>
			        </div> -->
			    	</div>
	    			<div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
	            <div class="sidebar-box pt-md-4">
	              <form action="#" class="search-form">
	                <div class="form-group">
	                  <span class="icon icon-search"></span>
	                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
	                </div>
	              </form>
	            </div>
	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Categories</h3>
	              
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Popular Articles</h3>
				  <form method="post">
					<?php
				  
					$query2 = "SELECT * FROM projects  LIMIT 3";
					$result = mysqli_query($conn, $query2);
					if (mysqli_num_rows($result) > 0)
						 while($row = mysqli_fetch_assoc($result))
						  {
							  $user_Image = $row["image_link"];

	?>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(<?php echo $row['image_link']; ?>);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="single.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span><?php echo $row["date"]; ?></a></div>
	                    <div><a href="#"><span class="icon-person"></span> <?php echo $row["cat"]; ?></a></div>
	                  </div>
	                </div>
	              </div>
					<?php
						
							}
					?>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Tag Cloud</h3>
	              <ul class="tagcloud">
	                <a href="#" class="tag-cloud-link">animals</a>
	                <a href="#" class="tag-cloud-link">human</a>
	                <a href="#" class="tag-cloud-link">people</a>
	                <a href="#" class="tag-cloud-link">cat</a>
	                <a href="#" class="tag-cloud-link">dog</a>
	                <a href="#" class="tag-cloud-link">nature</a>
	                <a href="#" class="tag-cloud-link">leaves</a>
	                <a href="#" class="tag-cloud-link">food</a>
	              </ul>
	            </div>

							<div class="sidebar-box subs-wrap img py-4" style="background-image: url(images/bg_1.jpg);">
								<div class="overlay"></div>
								<h3 class="mb-4 sidebar-heading">Join Us On Telegram</h3>
								<p class="mb-4">Join us on telegram and get latest project updates</p>
	              <form action="#" class="subscribe-form">
	                <div class="form-group">
	                 <button class="mt-2 btn btn-white submit"><a href="https://t.me/silly_fellow" class="mb-4 sidebar-heading"> Click to Join</a></button>
	                </div>
	              </form>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Paragraph</h3>
	              <p>It's through vulnerability that human beings create connections. The more vulnerable we can be with one another, the more that we'll trust one another and the more we'll be able to collaborate effectively.</p>
	            </div>
	          </div><!-- END COL -->
	    		</div>
	    	</div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>