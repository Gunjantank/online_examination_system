<!-- footer -->
	<div class="footer">
	<div class="container" >
		<div class="f-bg-w3l">
		<div class="col-md-4 w3layouts_footer_grid">
					<h3>About System</h3>
					<p>In regular days this system can be helpful because it needs less manpower , simply
     registration methods , instant results , exam can be fill  anywhere  that’s  like  many
     more.
</p>
				</div>
				<div class="col-md-4 w3layouts_footer_grid hpft">
					<h3>Useful Links</h3>
						<a href= "index.php">Home</a><br>
						<a href= "exam.php">Exam</a><br>
						<a href= "result.php">Result</a><br>
						<a href= "feedback.php">Feedback</a><br>
						<a  onclick="return confirm('are you sure you want to logout ?');" href= "logout.php">logout</a>
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h2>Education Dose</h2>
					<img src="examlogo.jpg" style="height:150px; width:200px"/>
				</div>
				<div class="clearfix"> </div>		
			</div>	
			</div>
	</div>
	<p class="copyright">© 2021 - 2022 DEVELOPED AT A.V.P.T.I | Design by TANK GUNJAN, TRADA SHREYA, PIPROTAR PAYAL, SIDDHAPURA NIKITA</p>



	<!-- Required Scripts -->
	<!-- Common Js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!--// Common Js -->
	<!--search-bar-agileits-->
	<script src="js/main.js"></script>
	<!--//search-bar-agileits-->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- Banner Responsive slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsive slider -->

	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter-agileits-w3layouts').countUp();
	</script>
	<!-- //stats -->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->

 <script src="js/bootstrap.js"></script>


	<!--// Required Scripts -->
</body>

</html>