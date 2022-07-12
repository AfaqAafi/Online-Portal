<?php
include 'code.php';
if (!isset($_SESSION['email'])) {
  header('location: login.php');
} else { ?>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="adminstyle.css" />
    <title>Submissions</title>
  </head>
  <style>
    body {

      background-color: #37538f;
    }
  </style>


  <body>
    <nav class="navbar navbar-light">
      <a class="navbar-brand btn btn-info" href="index.php">Home</a>
      <form class="form-inline">
        <button class="btn btn-info my-2 my-sm-0" type="submit">
          Logout
        </button>
      </form>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-12 offset-lg-2 offset-md-2">
          <?php
          $conn = mysqli_connect('localhost', 'root', '', 'online_portal');
          $sql = "SELECT * FROM student";
          if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
              echo '<table class="table table-dark">';
              echo "<thead>";
              echo "<tr>";
              echo "<th scope='col'>#</th>";
              echo "<th scope='col'>Name</th>";
              echo "<th scope='col'>Cnic</th>";
              echo "<th scope='col'>Programs</th>";
              echo "<th>Action</th>";
              echo  "</tr>";
              echo  "</thead>";
              echo  "<tbody>";

              $result = mysqli_query($conn, "SELECT * FROM student");

              while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['student_id'] . "</td>";
                echo "<td>" . $row['student_name'] . "</td>";
                echo "<td>" . $row['student_cnic'] . "</td>";
                echo "<td>" . $row['student_programs'] . "</td>";
                echo "<td>";
                echo '<a href="status_student.php?upd=' . $row['student_id'] . '" class="mr-3" title="View Record" 
                data-toggle="tooltip"><span class="fa fa-eye text-danger"></span></a>';
                echo "</td>";
                echo "</tr>";
              }
            }
          }

          echo "</tbody>";
          echo "</table>";
          ?>
        </div>
      </div>
    </div>
  </body>

  </html>
<?php } ?>