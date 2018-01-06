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
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    @include('./includes/navbar')
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="studentname">Student Name</label>
                    <input type="text" class="form-control" id="studentname" placeholder="Enter Student Name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="studentaddress">Student Address</label>
                    <textarea class="form-control" id="studentaddress" rows="3" placeholder="Enter Student Address"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="studentcontactnumber">Contact Number</label>
                    <input type="text" class="form-control" id="studentcontactnumber" placeholder="Enter Student Contact">
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="selectgender">Gender</label>
                    <select class="form-control" id="selectgender">
                      <option>Select Gender</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="teacherDOB">DOB</label>
                    <input type="date" class="form-control" id="teacherDOB" placeholder="Enter Techer DOB">
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="selectstandard">Select Standard</label>
                    <select class="form-control" id="selectstandard">
                      <option>Select Standard</option>
                      <option>Std 1</option>
                      <option>Std 2</option>
                      <option>Std 3</option>
                      <option>Std 4</option>
                      <option>Std 5</option>
                      <option>Std 6</option>
                      <option>Std 7</option>
                      <option>Std 8</option>
                      <option>Std 9</option>
                      <option>Std 10</option>
                    </select>
                  </div>
                </div>
              </div>
              </div>
              <a class="btn btn-primary btn-block" href="login.html">ADD</a>
        </form>
      <!-- Bootstrap core JavaScript-->
      @include('./includes/scripts')
    </div>
  </body>
</html>