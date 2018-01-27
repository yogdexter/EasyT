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
            <form method="POST" action="/ADDpapers">
              {{csrf_field()}}
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="Exam date">exam date</label>
                    <input type="text" class="form-control" name="e_date" placeholder="Enter exam date">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="Exam subjects">subject</label>
                    <input type "text" class="form-control" name="e_subjects"rows="3" placeholder="Enter exam subjects">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="Exam description">exam description</label>
                    <textarea class="form-control" name="e_description" placeholder="Enter exam description"><textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="Exam time">exam time</label>
                    <input type="text" class="form-control" name="e_time" placeholder="Enter exam description">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="total">total marks</label>
                    <input type="text" class="form-control" name="e_total" placeholder="Enter exam description">
                  </div>
                </div>
              </div>

              <div class="row">
                <button type="submit"> Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
              
      <!-- Bootstrap core JavaScript-->
      @include('./includes/scripts')
  </body>
</html>