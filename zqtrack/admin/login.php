<?php
include("../connect.php");
if(isset($_POST["submit"])){
  extract($_POST);
  $obj->login($email,$pass);
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="shortcut icon" type="image/png" href="..\img\about-1.jpeg" />
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
                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="..\img\about-1.jpeg" width="180" alt="">
                </a>
                <p class="text-center">Staff Login Here</p>
                <br>
                <form method="post">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Select Role :</label>
                  <select class="form-control">
                    <option value="" selected disabled class="text-center"> ------------  Select user role here  ------------                     </option>
                    <option value="">Administrator</option>
                    <option value="">Teacher</option>
                  </select>
</div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Enter Email :</label>
                    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Enter Password :</label>
                    <input type="password" name="pass" required class="form-control" id="exampleInputPassword1">
                  </div>
                 
                  <button href="" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit" name="submit">Sign In</button>
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