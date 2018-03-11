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
            <form method="POST" action="/addTeacher">
              {{csrf_field()}}
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="teachername">Teacher Name</label>
                    <input type="text" class="form-control" name="t_name" id="teachername" placeholder="Enter Techer Name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="teacheraddress">Teacher Address</label>
                    <textarea class="form-control" name="t_address" required="" id="teacheraddress" rows="3" placeholder="Enter Teacher Address"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="teachercontactnumber">Contact Number</label>
                    <input type="text" class="form-control" name="c_number" required="" id="teachercontactnumber" placeholder="Enter Techer Contact">
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
                    <input type="date" class="form-control" name="dob" required="" id="teacherDOB" placeholder="Enter Techer DOB">
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label for="exampleInputName">Teacher Email</label>
                  <input class="form-control" name="email" id="exampleInputName" type="email" aria-describedby="nameHelp" placeholder="Enter Email">
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block">ADD</button>
        </form>
      <!-- Bootstrap core JavaScript-->
      @include('./includes/scripts')
    </div>
  </body>
</html>