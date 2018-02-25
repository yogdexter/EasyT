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
			<div class="container">
				<div class="row" style="text-align: justify;">
					<div class="col-12">
						<h3>{{$question->question}} </h3>
					</div>
				</div>
				<div class="row" style="text-align: justify;">
					<div class="col-12">
						{{$question->description}}
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-12 col-md-4">
						<form method="post" action="/submitAnswer">
							{{csrf_field()}}
							<input type="Hidden" name="question_id" value="{{$question->id}}">
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Answer</label>
								<textarea class="form-control" id="Question Discripsion" rows="3" name="answer"></textarea>
							</div>
							<button type="submit" class="btn btn-info">Submit Answer</button>
						</form>
					</div>
					<div class="col-12 col-md-8">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id lectus a lorem eleifend pulvinar non pretium tellus. Etiam condimentum risus leo, sit sed.
								<div class="footer"><small>Answered By Jhon Doe at 3 hours ago</small></div>
							</li>
							<li class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id lectus a lorem eleifend pulvinar non pretium tellus. Etiam condimentum risus leo, sit sed.
								<div class="footer"><small>Answered By Jhon Doe at 3 hours ago</small></div>
							</li>
							<li class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id lectus a lorem eleifend pulvinar non pretium tellus. Etiam condimentum risus leo, sit sed.
								<div class="footer"><small>Answered By Jhon Doe at 3 hours ago</small></div>
							</li>
							<li class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id lectus a lorem eleifend pulvinar non pretium tellus. Etiam condimentum risus leo, sit sed.
								<div class="footer"><small>Answered By Jhon Doe at 3 hours ago</small></div>
							</li>
							<li class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id lectus a lorem eleifend pulvinar non pretium tellus. Etiam condimentum risus leo, sit sed.
								<div class="footer"><small>Answered By Jhon Doe at 3 hours ago</small></div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</main>
		@include('./includes/scripts')
	</body>
</html>