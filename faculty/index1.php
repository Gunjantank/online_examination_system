<?php include 'header.php';?>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		<!--menu start-->
		
		
		<!-- header-slider-area start -->
		<section class="header-slider-area">
			<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
			
			  <!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="single-slide-item slide-1">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
									<div class="single-slide-item-content">
											<center><h2>x</h2></center>
										</div>
										<!-- /.single-slide-item-content-->
									</div><!-- /.col-->
								</div><!-- /.row-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
					</div><!-- /.item .active-->
					<div class="item">
						<div class="single-slide-item slide-2">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
									<div class="single-slide-item-content">
											<center><h2><?php echo "Welcome  " . $_SESSION['unm'];?></h2></center>
										</div>
										<!-- /.single-slide-item-content-->
									
									</div><!-- /.col-->
								</div><!-- /.row-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
					</div><!-- /.item .active-->
				</div><!-- /.carousel-inner-->

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="lnr lnr-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="lnr lnr-chevron-right"></span>
				</a>
			</div><!-- /.carousel-->

		</section><!-- /.header-slider-area-->
		<!-- header-slider-area end -->
		
		

		<!--about-us start -->
		
			<div class="container" style="margin-top:30px">
				
			</div><!--/.container-->

		

		<!--statistics start-->
		<section  class="statistics">
			<div class="container">
				<div class="statistics-counter "> 
					<div class="col-md-4 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
								<img src="assets/images/counter/counter1.png" alt="counter-icon" />
							</div><!--/.statistics-img-->
							<div class="statistics-content">
								<div class="counter">3</div>
								<h3>Exam</h3>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-4 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
								<img src="assets/images/counter/counter2.png" alt="counter-icon" />
							</div><!--/.statistics-img-->
							<div class="statistics-content">
								<div class="counter">2</div>
								<h3>Student</h3>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-4 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-img">
								<img src="assets/images/counter/counter3.png" alt="counter-icon" />
							</div><!--/.statistics-img-->
							<div class="statistics-content">
								<div class="counter">2</div>
								<h3>Result</h3>
							</div><!--/.statistics-content-->
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.statistics-->
		<!--statistics end-->

			<div class="container" style="margin-top:30px">
				
			</div>
		
		
		
<?php include 'footer.php';?>



