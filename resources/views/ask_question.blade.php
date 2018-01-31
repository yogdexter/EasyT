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
						<h1 class="bd-title" id="content">Question</h1>
					</div>
				</div>
				<div class="container">
					<form method="post" action="/ask_question">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="exampleFormControlInput1">Insert Question</label>
									<input type="text" class="form-control" id="Insert Question" placeholder="Insert Question" name="question">
								</div>
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Question Discripsion</label>
											<textarea class="form-control" id="Question Discripsion" rows="3" placeholder="Describe Your Question" name="description"></textarea>
										</div>
									</div>
								</div>
								<input class="btn btn-primary" type="submit" value="Submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</main>
		@include('./includes/scripts')
	</body>
</html>