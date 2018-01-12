<!-- FOOTER.PHP -->

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<span class="copyright">&copy; <script>document.write(new Date().getFullYear())</script> Daydream Farm Design Studio, All Rights Reserved.</span>
			</div>
			<div class="col-md-4">
				<ul class="list-inline social-buttons">
					<li class="list-inline-item">
						<a href="#">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<!-- <ul class="list-inline quicklinks">
					<li class="list-inline-item">
						<a href="#">Privacy Policy</a>
					</li>
					<li class="list-inline-item">
						<a href="#">Terms of Use</a>
					</li>
				</ul> -->
			</div>
		</div>
	</div>
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
