<!-- FOOTER.PHP -->




<div class="search-text">
		<!-- <div class="container">
			<div class="row text-center">

				<div class="form">
						<h4></h4>
						 <form id="search-form" class="form-search form-horizontal">
								 <input type="text" class="input-search" placeholder="Email Address">
								 <button type="submit" class="btn-search">SUBMIT</button>
						 </form>
				 </div>

			 </div>
		</div> -->
</div>

 <footer>
	<div class="container">
		<div class="row">

						 <div class="col-md-4 col-sm-6 col-xs-12">
							 <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/DaydreamFarmDesignStudio-Logo-Small.png"/>
						 </div>

						 <div class="col-md-4 col-sm-6 col-xs-12">
								 <ul class="menu">
											<div class="heading">Menu</div>
											<li>
												 <a class="js-scroll-trigger" href="#page-top">Return to top</a>
											 </li>
											<li>
												 <a class="js-scroll-trigger"  href="#portfolio">Portfolio</a>
											 </li>

											 <li>
													<a class="js-scroll-trigger"  href="#specialties">Specialties</a>
											 </li>

											 <li>
												 <a class="js-scroll-trigger"  href="#aboutus">About Us</a>
											 </li>

											 <!-- <li>
													<a href="#">Contact </a>
											 </li> -->
									</ul>
						 </div>

						 <div class="col-md-4 col-sm-6 col-xs-12">
							 <ul class="contact-info">
										 <div class="heading">Contact</div>
										<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i> <span class="address">607 W Main St Suite 002, </br>Louisville KY 40202</span>
										 </li>
										 <li>
												<a href="tel:+15027152710"><i class="fa fa-phone" aria-hidden="true"></i> <span class="text">502.715.2710</span></a>
										 </li>
										 <li>
												<a href="mailto:cara@daydreamfarm.studio"><i class="fa fa-envelope" aria-hidden="true"></i> <span class="text">email</span></a>
										 </li>
								</ul>
						</div>


				</div>
				<div class="row">
					<div class="col-md-12">
					 <p class="copyright text-center"> ©<script>document.write(new Date().getFullYear())</script> Daydream Farm. All rights reserved.</p>
					</div>
				</div>
		 </div> <!-- /container -->
 </footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>


<!-- Custom scripts for this template -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>

<?php include("portfolio-modals.php"); ?>
</body>

</html>
