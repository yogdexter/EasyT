<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('includes/head')
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="#">EasyT</a>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/login">Institute Login</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="/images/slide1.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h2 class="text-primary">Online Test</h2>
							
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/images/slide2.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h2 class="text-primary">Online Atandance And Dropout Detection</h2>
							
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/images/slide3.jpg" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h2 class="text-primary">More Than Thousands of Practice Paper</h2>
							
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="container mt-5">
				<section id="about">
					<div class="row">
						<div class="row">
							<h1 class="bd-title" id="content">Who We Are....?</h1>
						</div>
						<div class="row mt-2">
							<div class="col-12 col-md-6">
								<img src="/images/internet-and-education-900x600.jpg" class="img-fluid">
							</div>
							<div class="col-12 col-md-6">
								<h3>We are professional institute</h3>
								<p class="lead text-justify">
									<p class="lead text-justify">We are going to develop easy teaching portal Which provide the facilities for online test & assessment.</p>
									<p class="lead text-justify">In our System we are also going to provide the smart Attendance System which detect drop out of student in school , report to admin & also assign the counsellor  for resolve the reason for drop out through meeting with students & parents</p>
									<p class="lead text-justify">We also provide the online discussion forum For doubt solving.</p>
								</p>
							</div>
							
						</div>
					</div>
					<div class="row mt-5">
						<div class="row">
							<h3 class="bd-title" id="content">Our Features</h3>
						</div>
						<div class="row">
							<div class="col-12 col-md-3">
								<div class="card" style="width: 18rem;">
									<img class="card-img-top" src="/images/bio.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Maintain Student Details & Attendance</p>
									</div>
								</div>
							</div>
						<div class="col-12 col-md-3">
								<div class="card" style="width: 18rem;">
									<img class="card-img-top" src="/images/f2.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Online Test</p>
									</div>
								</div>
							</div>
						<div class="col-12 col-md-3">
								<div class="card" style="width: 18rem;">
									<img class="card-img-top" src="/images/Discussion.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text">Discussion Form</p>
									</div>
								</div>
							</div>
						<div class="col-12 col-md-3">
								<div class="card" style="width: 18rem;">
									<img class="card-img-top" src="/images/f4.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"> Student Dropout</p>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</section>
				<section>
					
				</section>
			</div>
		</main>
		<footer>
			
		</footer>
		@include('includes/scripts')
	</body>
</html>