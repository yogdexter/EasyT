<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  @include('./includes/head')
</head>


<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="POST" action="/doRegister">
        {{csrf_field()}}
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Institute Name</label>
                <input class="form-control" name="name" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Principle Name</label>
                <input class="form-control" name="p_name" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Email Id</label>
                <input class="form-control" name="email" id="exampleInputName" type="Email" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Intitute Website</label>
                <input class="form-control" name="website" id="exampleInputName" type="url" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Addresss</label>
                <textarea class="form-control" name="address"></textarea>
              </div>
            </div>
          </div>
           <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Phone number</label>
                <input class="form-control" name="p_number" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" href="login.html">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
@include('./includes/scripts')
</body>

</html>
