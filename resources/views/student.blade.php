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
                <th>Serial no</th>
                <th>student name</th>
                <th>Birthdate</th>
                <th>contact no.</th>
                <th>student address</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Aastha Kacha</td>
                <td>20/12/96</td>
                <td>9876543211</td>
                <td>shayonacity</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Vaishali Chauhan</td>
                <td>2/06/97</td>
                <td>9123456780</td>
                <td>subhashnagar</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Rohit Parmar</td>
                <td>31/01/97</td>
                <td>8765432190</td>
                <td>geetapura</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Gayatri Gorkha</td>
                <td>19/03/96</td>
                <td>9812345678</td>
                <td>gandhingar</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Akshay Dhariwal</td>
                <td>23/09/95</td>
                <td>8765490321</td>
                <td>ghatlodiya</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Shivam Sharma</td>
                <td>04/07/98</td>
                <td>9427052035</td>
                <td>ajadsnagar</td>
              </tr>
            </table>
          </body>
        </html>