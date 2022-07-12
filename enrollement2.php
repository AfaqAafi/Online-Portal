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
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" />

  <title>Enrollment</title>
</head>

<body class="enrollment2">
  <div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand text-white" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="https://drive.google.com/file/d/1LcansYPhJfrJGCfac2Pvqfgr-L9q0vDX/view?usp=sharing">Prospectus</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="aboutus.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact form.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enrollment
            </a>
            <div class="dropdown-menu drpdwn" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Apply</a>
              <a class="dropdown-item" href="status.php">Status</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container mb-2">

  <form method="POST" class="enr-form">
  <div class="form-group mt-5" >  
  <label for="exampleInputPassword1">Enter Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group " >  
  <label for="exampleInputPassword1">Father Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Enter Cnic</label>
    <input type="number" name="cnic" class="form-control" id="exampleInputPassword1" placeholder="Enter Cnic"> 
  </div>
  <div class="form-group " >  
  <label for="exampleInputPassword1">Address</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group form-check">
    <label for="" class=""> Programs </label>
   <select name="programs" class="form-control">
     <option value="">--Select</option>
     <option value="BSCS">BSCS</option>
     <option value="Bootny">Bootny</option>
     <option value="Zoology">Zoology</option>
     <option value="Chemistry">Chemistry</option>
     <option value="Physics">Physics</option>
     <option value="DPT">DPT</option>
   </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" >Matric Marks</label>
    <input type="number" name = "matric" class="form-control" id="exampleInputPassword1" placeholder="Enter Marks">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Intermediate Marks</label>
    <input type="number" class="form-control" name="intermediate" id="exampleInputPassword1" placeholder="Enter Marks">
  </div>
  <div class="form-group " >  
  <label for="exampleInputPassword1">BISE</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Bachelor Marks</label>
    <input type="number"  name = "bachelor" class="form-control" id="exampleInputPassword1" placeholder="Enter Marks">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Document Url</label>
    <input type="text"  name = "document" class="form-control" id="exampleInputPassword1" placeholder="Student Status">
  </div>

  <div class="form-group">
    <!-- <label for="exampleInputPassword1">View Instruction Here</label> -->
    <a href="screenshot.html">View Instruction Here</a>
  </div>
  


<button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
</form>
<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$cnic = $_POST['cnic'];
$programs = $_POST['programs'];
$matric = $_POST['matric'];
$intermediate = $_POST['intermediate'];
$bachelor = $_POST['bachelor'];
$document = $_POST['document'];

$conn = mysqli_connect('localhost', 'root', '', 'online_portal');

$query = mysqli_query($conn, "INSERT INTO student(student_name, student_programs, student_cnic,
 student_matric, student_intermediate, student_bachelor, student_document)
VALUES('$name', '$programs', '$cnic', '$matric', '$intermediate', 
'$bachelor', '$document')");


if($query){

 echo '<div class="alert alert-primary" id="top-alert" role="alert">
  Successfully Added!
</div>';
}else{
  echo '<div class="alert alert-danger" id="top-alert" role="alert">
  Query Error!
</div>';
}


}


?>
</div>


</body>
</html>