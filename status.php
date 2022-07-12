
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      background-color: #37538f;

    }
  </style>
  <title>Status</title>
</head>

<body>
  <div id="login">

    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">

            <form id="login-form" class="form" action="" method="POST">
              <h3 class="text-center text-info font-weight-bold">Enrollment Form</h3>

              <div class="form-group">
                <label for="username"  class="text-info font-weight-bold">Enter Cnic</label><br />
                <input type="number" id="" name="cnic" class="form-control" />
              </div>

              <div class="form-group">
                <input type="submit" name="submit"  class="btn btn-info btn-md w-100" value="Submit" />
              </div>
            </form>
<?php

if(isset($_POST['submit'])){
    $cnic = $_POST['cnic'];
     
  $conn = mysqli_connect('localhost', 'root', '', 'online_portal');
  $query = "SELECT * From student where student_cnic = '$cnic'";

 $data = mysqli_query($conn, $query);
 $result = mysqli_fetch_array($data);
  
   
  if($result["student_status"] == "Approved"){
    echo '<div class="alert alert-primary" id="top-alert" role="alert">
    Your application has been Approved congratulations!
  </div>';
  }
  if($result["student_status"] == "Rejected"){
    echo '<div class="alert alert-danger" id="top-alert" role="alert">
    Your application has been Rejected contact support!
  </div>';


  }
}

?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</body>

</html>
