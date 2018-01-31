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
                <th>Select Standard</th>
                </tr>
              <tr>
                <td>1</td>
                <td>Aastha Kacha</td>
                <td>shayonacity</td>
                <td>Aashu98@gmail.com</td>
                <td>9876543211</td>
                <td>female</td>
                <td>20/12/96</td>
                <td>std1</td> 
              </tr>
              <tr>
                <td>2</td>
                <td>Vaishali Chauhan</td>
                <td>shubhashnagar</td>
                <td>vaishu356@gmail.com</td>
                <td>9123456780</td>
                <td>female</td>
                <td>02/06/97</td>
                <td>std2</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Rohit Parmar</td>
                <td>geetapura</td>
                <td>rohit55@gmail.com</td>
                <td>8765432190</td>
                <td>male</td>
                <td>31/01/97</td>
                <td>std3</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Gayatri Gorkha</td>
                <td>gandhinagar</td>
                <td>gayu78@gmail.com</td>
                <td>9812345678</td>
                <td>female</td>
                <td>19/03/96</td>
                <td>std4</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Akshay Dhariwal</td>
                <td>ghatlodiya</td>
                <td>akshay998@gmail.com</td>
                <td>8765490321</td>
                <td>male</td>
                <td>23/09/95</td>
                <td>std5</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Shivam Sharma</td>
                <td>ajadnagar</td>
                <td>shivam466@gmail.com</td>
                <td>9427052035</td>
                <td>male</td>
                <td>04/07/98</td>
                <td>std6</td>
              </tr>
            </table>
          </body>
        </html>