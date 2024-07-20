<!-- Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
  <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
          <div class="card mb-0">
            <div class="card-body">
              <p class="text-center">Staff Registration Here</p>
              <br>
              <form method="post" enctype="multipart/form-data">
                <div class="row">

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="name" class="form-label">Enter Name :</label>
                      <input type="text" name="name" required class="form-control" id="name">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="email" class="form-label">Enter Email :</label>
                      <input type="email" name="email" required class="form-control" id="email">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for="pass" class="form-label">Enter Password :</label>
                      <input type="password" name="pass" required class="form-control" id="pass">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="role" class="form-label">Select Role :</label>
                      <select class="form-control" name="role" required id="role">
                        <option selected disabled class="text-center"> ----- Select role here ----- </option>
                        <option value="Admin">Administrator</option>
                        <option value="Teacher">Teacher</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="mb-4">
                      <label for="img" class="form-label">File Upload :</label>
                      <input type="file" name="img" required class="form-control" id="img">
                    </div>
                  </div>

                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit" name="submit">Staff Registration</button>
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

<?php
if (isset($_POST["submit"])) {
  extract($_POST);

  $dir = "images/";
  $file = $dir . basename($_FILES["img"]["name"]);
  move_uploaded_file($_FILES["img"]["tmp_name"], $file);

  $query = "INSERT INTO staff VALUES ('','$name','$email','$pass','$file','$role')";

  if ($obj->query($query) === TRUE) {
    echo "<script>alert('Staff Registration is Successful.');</script>";
  } else {
    echo "<script>alert('Staff Registration is Not Successful.');</script>";
  }
}
?>
