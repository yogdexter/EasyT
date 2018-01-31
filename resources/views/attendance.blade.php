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
            <h4 class="float-left">attendance details</h4>
          </div>
          <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="date" class="form-control" id="exam attendance_date" placeholder="Enter exam attendance_date">
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label for="exampleFormControlInput1">Select Class</label>
                <select class="custom-select form-control">
                  <option selected>Open this select menu</option>
                  <option value="1">std1</option>
                  <option value="2">std2</option>
                  <option value="3">std3</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <br>
              <button type="submit" class="btn btn-info">Find Students</button>
            </div>
          </div>
              <table>
                <tr>
                  <th>class</th>
                  <th>date</th>
                  <th>student name</th>
                  <th>attendance</th>
                </tr>
                <tr>
                  <td>7th</td>
                  <td>7/1/18</td>
                  <td>Rishi</td>
                  <td><input type="checkbox"></input></td>
                </tr>
                <tr>
                  <td>7th</td>
                  <td>7/1/18</td>
                  <td>Ariya</td>
                  <td><input type="checkbox"></input></td>
                </tr>
                <tr>
                  <td>7th</td>
                  <td>7/1/18</td>
                  <td>Sidharth</td>
                  <td><input type="checkbox"></input></td>
                </tr>
                <tr>
                  <td>7th</td>
                  <td>7/1/18</td>
                  <td>Shaurya</td>
                  <td><input type="checkbox"></input></td>
                </tr>
                <tr>
                  <td>7th</td>
                  <td>7/1/18</td>
                  <td>Anika</td>
                  <td><input type="checkbox"></input></td>
                </tr>
                <tr>
                  <td>7th</td>
                  <td>7/1/18</td>
                  <td>Arohi</td>
                  <td><input type="checkbox"></input></td>
                </tr>
              </table>
            </body>
          </html>
          
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fa fa-angle-up"></i>
        </a>
        <!-- Bootstrap core JavaScript-->
        @include('./includes/scripts')
      </div>
    </body>
  </html>

