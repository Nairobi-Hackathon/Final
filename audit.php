
<?php

include('database/db.php');


if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $status = $_POST['status'];
    $rate = $_POST['rate'];
    $violation = $_POST['violation'];
    $insights = $_POST['insights'];

   
    

    try{
            $sql = "INSERT INTO audits (Title ,Audit_Status, Comp_Rate,Violations, Insights)
            VALUES('$title', '$status', '$rate', '$violation', '$insights')";

             $result = mysqli_query($conn, $sql);

          
            echo'
            <div class="alert alert-success" role="alert">
                 Audit Added Successfully!  
                <a href="dashboard.php" class="btn btn-warning" >Back Home</a>
            </div></br>
            ';

    }catch(mysqli_sql_exception){

        echo'
        <div class="alert alert-danger" role="alert">
            There was an Error Kindly Check your Entry
        </div></br>
        ';

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
          body {
      background: #007bff;
      background: linear-gradient(to right, #0062E6, #33AEFF);
    }

    .btn-login {
      font-size: 0.9rem;
      letter-spacing: 0.05rem;
      padding: 0.75rem 1rem;
    }
    </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Make Audits</h5>
            <form action="audit.php" method="POST">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="title" placeholder="Audit Title">
                <label for="floatingInput">Title</label>
              </div>
              <div class="form-floating mb-3">
                <select name="status" id=""   class="form-control" id="floatingPassword">
                  <option >---</option>
                    <option value="completed">Completed</option>
                    <option value="completed">Pending</option>
                </select>
                <label for="floatingPassword">Status</label>
              </div>

              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" name="rate" placeholder="Audit Title">
                <label for="floatingInput">Compliance Rate</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="violation" placeholder="Audit Title">
                <label for="floatingInput">Violations</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="insights" placeholder="Audit Title">
                <label for="floatingInput">Insights</label>
              </div>


              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="submit" type="submit">Submit Audit</button>
                </div>
    
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>