DOCTYPE html>
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
            <h4 class="float-left">Student Details</h4>
            <a href="/student_registration" class="btn btn-primary float-right">ADD Student</a>
          </div>
          <div class="card-body">
            <table>
              <tr>
                <th>Serial No</th>
                <th>Student Name</th>
                <th>student Address</th>
                <th>student Email</th>
                <th>Student Contact</th>
                <th>Gender</th>
                <th>Student DOB</th>
                <th>Standard</th>
                <th>Actions</th>
              </tr>
              @foreach($students as $student)
              <tr>
                <td>{{$student->id}} </td>
                <td>{{$student->Name}}</td>
                <td>{{$student->Address}}</td>
                <td>{{$student->Email}}</td>
                <td>{{$student->Contact}}</td>
                <td>{{$student->Gender}}</td>
                <td>{{$student->DOB}}</td>
                <td>{{$student->Class_Id}}</td>
                <td><a  class="btn btn-primary" href="/student_editing/{{$student->id}}"><i class="fa fa-edit"></i></a><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                <td>
              </tr>
              @endforeach
            </table>
          </body>
        </html>