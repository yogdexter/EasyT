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
            <form method="POST" action="/addStudent">
              {{csrf_field()}}
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="studentname">Student Name</label>
                    <input type="text" class="form-control" required="" name="S_name" id="studentname" placeholder="Enter Student Name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="studentaddress">Student Address</label>
                    <textarea class="form-control" name="S_address" required="" id="studentaddress" rows="3" placeholder="Enter Student Address"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="studentemail">Email</label>
                    <input type="Email" class="form-control" name="Email" id="studentemail" placeholder="Enter Student Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="studentcontactnumber">Contact Number</label>
                    <input type="text" class="form-control" name="P_number" required=""  id="studentcontactnumber" placeholder="Enter Student Contact">
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="selectgender">Gender</label>
                    <select class="form-control" name="Gender" required="" id="selectgender">
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="teacherDOB">DOB</label>
                    <input type="date" class="form-control" name="DOB" required="" id="teacherDOB" placeholder="Enter Techer DOB">
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="selectstandard">Select Standard</label>
                    <select class="form-control" name="Standard" required="" id="selectstandard">
                      <option value="">Select Standard</option>
                      <option value="1">Std 1</option>
                      <option value="2">Std 2</option>
                      <option value="3">Std 3</option>
                      <option value="4">Std 4</option>
                      <option value="5">Std 5</option>
                      <option value="6">Std 6</option>
                      <option value="7">Std 7</option>
                      <option value="8">Std 8</option>
                      <option value="9">Std 9</option>
                      <option value="10">Std 10</option>
                    </select>
                  </div>
                </div>
              </div>
              </div>
              <button class="btn btn-primary btn-block" href="login.html">ADD</button>
        </form>
      <!-- Bootstrap core JavaScript-->
      @include('./includes/scripts')
    </div>
  </body>
</html>