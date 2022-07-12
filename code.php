<?php
  session_start();
  $conn = mysqli_connect('localhost', 'root', '', 'online_portal'); //database connection
  if(isset($_POST['loginBtn'])){

  $useremail = $_REQUEST['email']; //information from login form
  $user_password = $_REQUEST['password']; //information from login form
  $sql = "SELECT admin_id, admin_email, admin_password FROM admin WHERE admin_email='$useremail' 
  AND admin_password='$user_password'";

  $result = mysqli_query($conn, $sql);

  $login_variables = mysqli_fetch_array($result);
  $count = mysqli_num_rows($result);

  if($count > 0){
        
    $_SESSION['email'] = $login_variables['admin_email'];
  $_SESSION['password'] = $login_variables['admin_password'];

  if(isset($_SESSION['email']) && isset($_SESSION['password']))
  {
    header ("location: submissions.php");
  }

  }
  
  else{

echo "<script type='text/javascript'>alert ('Sorry! Cannot login.'); 
</script>";

}

  }
  
?>