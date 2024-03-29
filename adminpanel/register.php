<?php 
include ('config.php');
if(isset($_POST['register'])){
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $role = mysqli_real_escape_string($connection, $_POST['role']);

  $enc_pass = password_hash($password, PASSWORD_BCRYPT);

  $check_email = "select * from admin where `email` = '$email'";
  $exist_email = mysqli_query($connection, $check_email);
  if(mysqli_num_rows($exist_email) > 0){
    echo '<script>alert(" email already exist") </script>';
  }else{
    $result = mysqli_query($connection, "INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`) VALUES (NULL, '$name', '$email', '$enc_pass', '$role')
    ");
    if($result){
      echo '<script>alert("registration successful") </script>';

    }else{
      echo '<script>alert("registration failed") </script>';

    }

  }






}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form action="register.php" method="POST">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Role</label>
                    <select name="role" id="role" class="form-select" aria-label="Default select example">
                    <option selected>Select Role</option>
                    <option value="1">Employee</option>
                    <option value="2">User</option>
                    </select>
                  </div>
                  <input type="submit" name="register" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Register">
                  
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="./login.php">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>