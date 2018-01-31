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
            <h4 class="float-left">Exam Details</h4>
            <a href="/" class="btn btn-primary float-right">ADD Question Paper</a>
          </div>
          <div class="card-body">
              <table>
                <tr>
                  <th>Exam Date</th>
                  <th>Subjects</th>
                  <th>Exam Description</th>
                </tr>
                @foreach($exams as $exam)
                <tr>
                <td>{{$exam->exam date}}</td>
                <td>{{$exam->subject}}</td>
                <td>{{$exam->exam description}}</td>
                </tr>
                @endforeach
                <tr>
                  <td>1/3/17</td>
                  <td>Maths</td>
                  <td>half yearly</td>
                </tr>
                <tr>
                  <td>2/3/17</td>
                  <td>Physics</td>
                  <td>half yearly</td>
                </tr>
                <tr>
                  <td>3/3/17</td>
                  <td>Social Studies</td>
                  <td>Half yearly</td>
                </tr>
                <tr>
                  <td>4/3/17</td>
                  <td>Grammer</td>
                  <td>Half yearly</td>
                </tr>
                <tr>
                  <td>5/3/17</td>
                  <td>Chemistry</td>
                  <td>Half yearly</td>
                </tr>
                <tr>
                  <td>6/3/17</td>
                  <td>Biology</td>
                  <td>Half yearly</td>
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