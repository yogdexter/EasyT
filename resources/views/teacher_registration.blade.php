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
                    <label for="teachername">Teacher Name</label>
                    <input type="text" class="form-control" id="teachername" placeholder="Enter Techer Name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="teacheraddress">Teacher Address</label>
                    <textarea class="form-control" id="teacheraddress" rows="3" placeholder="Enter Teacher Address"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="teachercontactnumber">Contact Number</label>
                    <input type="text" class="form-control" id="teachercontactnumber" placeholder="Enter Techer Contact">
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
              </div>
              <a class="btn btn-primary btn-block" href="login.html">ADD</a>
        </form>
      <!-- Bootstrap core JavaScript-->
      @include('./includes/scripts')
    </div>
  </body>
</html>