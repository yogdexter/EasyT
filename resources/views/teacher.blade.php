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
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }
    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }
    tr:nth-child(even) {
    background-color: #dddddd;
    }
    </style>
  </head>
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    @include('./includes/navbar')
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h4 class="float-left">Teacher Details</h4>
            <a href="teacher_registration" class="btn btn-primary float-right">ADD Teacher</a>
          </div>
          <div class="card-body">
            <table>
        <tr>
          <th>Serial No</th>
          <th>Teacher Name</th>
          <th>Teacher Address</th>
          <th>Teacher Contact</th>
          <th>Teacher Gender</th>
          <th>Teacher DOB</th>
          <th>Teacher Email</th>
        </tr>
        <tr>
          <td>1</td>
          <td>asha</td>
          <td>devcity</td>
          <td>1234567890</td>
          <td>Female</td>
          <td>01/01/2011</td>
          <td>asha12@gmail.com</td>
          </tr>
        <tr>
          <td>2</td>
          <td>Riya</td>
          <td>nehrunagar</td>
          <td>1234567890</td>
          <td>Female</td>
          <td>01/01/2012</td>
          <td>riya44@gmail.com</td>
          
        </tr>
        <tr>
          <td>3</td>
          <td>Rohit</td>
          <td>sitapura</td>
          <td>1234567890</td>
          <td>Male</td>
          <td>01/01/2013</td>
          <td>rohit6@gmail.com</td>
          
        </tr>
        <tr>
          <td>4</td>
          <td>Rahul</td>
          <td>gandhingar</td>
          <td>1234567890</td>
          <td>Male</td>
          <td>01/01/2014</td>
          <td>rahul5@gmail.com</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Yoshi</td>
          <td>ghatlodiya</td>
          <td>1234567890</td>
          <td>Female</td>
          <td>01/01/2015</td>
          <td>yoshi88@gmail.com</td>
          
        </tr>
        <tr>
          <td>6</td>
          <td>Guri</td>
          <td>shubhash nagar</td>
          <td>1234567890</td>
          <td>Female</td>
          <td>01/01/2016</td>
          <td>guri9@gmail.com</td>
        </tr>
      </table>
          </div>
        </div>
      </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    @include('./includes/scripts')
  </div>
</body>
</html>