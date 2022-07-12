<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  global $data;

  ?>
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
  <link rel="stylesheet" href="adminstyle.css" />
  <title>Admin Panel</title>
</head>

<body>
  <a href="submissions.php"><button class="btn btn-info btn-sync" style="margin-top: 20px; margin-left: 20px">
      Back
    </button></a>
  <div class="container text-white">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-10 offset-lg-1 offset-md-1 offset-1 m-top-20">


        <div class="d-flex justify-content-left">
          <h3 class="text-left text-white pt-5 h3" style="margin-bottom: 20px">
            Enrollment Status
          </h3>
        </div>

        <form action="" method="post">
          <select class="btn btn-primary w-100" name="status" id="status">
            <option value="Approved">Approve</option>
            <option value="Rejected">Reject</option>
          </select>
          <input type="submit" value="Update Status" name="save" class="btn btn-success w-100 mt-2">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Full Name</label>
              <select name="name" class="form-control" id="name" placeholder="Full Name" readonly>
                <?php

                $conn = mysqli_connect('localhost', 'root', '', 'online_portal');

                $id = $_REQUEST['upd'];

                $result = mysqli_query($conn, "SELECT * FROM student WHERE student_id='$id'");

                $data = mysqli_fetch_assoc($result);


                ?>
                <option value=""><?php echo $data["student_name"] ?></option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="inputPassword4">CNIC:</label>

              <select name="cnic" class="form-control" id="cnic">
                <?php

                $conn = mysqli_connect('localhost', 'root', '', 'online_portal');

                $id = $_REQUEST['upd'];

                $result = mysqli_query($conn, "SELECT * FROM student WHERE student_id='$id'");

                $data = mysqli_fetch_assoc($result);


                ?>
                <option value=""><?php echo $data["student_cnic"] ?></option>
              </select>


            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Matric Marks</label>
            <select name="matric" class="form-control" id="matric" placeholder="Matric Marks" readonly>
              <?php

              $conn = mysqli_connect('localhost', 'root', '', 'online_portal');

              $id = $_REQUEST['upd'];

              $result = mysqli_query($conn, "SELECT * FROM student WHERE student_id='$id'");

              $data = mysqli_fetch_assoc($result);

              ?>
              <option value=""><?php echo $data["student_matric"] ?></option>
            </select>

          </div>
          <div class="form-group">
            <label for="inputAddress2">Inter Marks</label>
            <select name="intermediate" class="form-control" id="intermediate" placeholder="Inter Marks" readonly>
              <?php

              $conn = mysqli_connect('localhost', 'root', '', 'online_portal');

              $id = $_REQUEST['upd'];

              $result = mysqli_query($conn, "SELECT * FROM student WHERE student_id='$id'");

              $data = mysqli_fetch_assoc($result);


              ?>
              <option value=""><?php echo $data["student_intermediate"] ?></option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputAddress2">Bachelor Marks</label>
            <select name="bachelor" class="form-control" id="bachelor" placeholder="Bachelor Marks" readonly>
              <?php

              $conn = mysqli_connect('localhost', 'root', '', 'online_portal');

              $id = $_REQUEST['upd'];

              $result = mysqli_query($conn, "SELECT * FROM student WHERE student_id='$id'");

              $data = mysqli_fetch_assoc($result);


              ?>
              <option value=""><?php echo $data["student_bachelor"] ?></option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Document Url</label>
              <select name="document" class="form-control" id="document" placeholder="" readonly>
                <?php

                $conn = mysqli_connect('localhost', 'root', '', 'online_portal');

                $id = $_REQUEST['upd'];

                $result = mysqli_query($conn, "SELECT * FROM student WHERE student_id='$id'");

                $data = mysqli_fetch_assoc($result);


                ?>
                <option value=""><?php echo $data["student_document"] ?></option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="inputCity">Programs</label>
              <select name="programs" class="form-control" id="programs" placeholder="" readonly>
                <?php

                $conn = mysqli_connect('localhost', 'root', '', 'online_portal');

                $id = $_REQUEST['upd'];

                $result = mysqli_query($conn, "SELECT * FROM student WHERE student_id='$id'");

                $data = mysqli_fetch_array($result)

                ?>
                <option value="<?php echo $data["student_id"] ?>"><?php echo $data["student_programs"] ?></option>

              </select>
            </div>

          </div>

        </form>
        <?php
        if (isset($_POST['save'])) {
          $status = $_POST['status'];

         $query = "UPDATE student SET student_status = '$status' where student_id = '$id'";

         mysqli_query($conn, $query);
         
  }


        ?>



      </div>

    </div>
  </div>



</body>

</html>