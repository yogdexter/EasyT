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
          <th>Serial no</th>
          <th>Teacher name</th>
          <th>Teacher id</th>
          <th>Teacher address</th>
        </tr>
        <tr>
          <td>1</td>
          <td>asha</td>
          <td>asha12@gmail.com</td>
          <td>devcity</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Riya</td>
          <td>riya44@gmail.com</td>
          <td>nehrunagar</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Rohit</td>
          <td>rohit6@gmail.com</td>
          <td>sitapura</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Rahul</td>
          <td>rahul5@gmail.com</td>
          <td>gandhingar</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Yoshi</td>
          <td>yoshi88@gmail.com</td>
          <td>ghatlodiya</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Guri</td>
          <td>guri9@gmail.com</td>
          <td>shubhash nagar</td>
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