<!DOCTYPE html>
<html>
	<head>
		<title></title>
		@include('./includes/head')
	</head>
	<body>
		<header><nav style="background-color:#EE3268;;" class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand" href="#">Hidden brand</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav></header>
		<main>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 bd-content" style="padding-top: 3em; ">
						<h1 class="bd-title" id="content">Discussion Forum</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h4><a href="/ask_question" class="btn btn-link" style="font-size: inherit;">Ask Question <i class="fa fa-question" aria-hidden="true"></i></a></h4>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="list-group">
									@foreach($questions as $q)
									<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
										<div class="d-flex w-100 justify-content-between">
											<h5 class="mb-1">{{$q->question}} </h5>
											<small>3 days ago</small>
										</div>
										<small>10 Comments</small>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		@include('./includes/scripts')
	</body>
</html>