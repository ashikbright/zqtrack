<?php
if (isset($_POST["submit"])) {
  extract($_POST);

  $q = "INSERT INTO teachers VALUES ('','$name','$educat','$salary','$add')";

  if ($obj->query($q) === TRUE) {
    echo "<script>alert('Teacher Registration is Successful.');</script>";
  } else {
    echo "<script>alert('Teacher Registration is Not Successful.');</script>";
  }
}
?>

<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Teachers Registration Form</h5>
        <div class="card">
          <div class="card-body">
            <form method="POST" onsubmit="return validateForm()">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="name" class="form-label">Teacher Name</label>
                    <input type="text" name="name" class="form-control" id="name" required aria-describedby="emailHelp">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="education" class="form-label">Select Education</label>
                    <select name="educat" id="education" class="form-control" required>
                      <option value="" selected disabled>---------------------- Select Education ---------------------</option>
                      <option value="PHD">PHD</option>
                      <option value="MASTER">MASTER</option>
                      <option value="DEGREE">DEGREE</option>
                      <option value="INTERMEDIATE">INTERMEDIATE</option>
                      <option value="MATRIC">MATRIC</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="salary" class="form-label">Select Salary</label>
                    <select name="salary" id="salary" class="form-control" required>
                      <option value="" selected disabled>---------------------- Select Salary ---------------------</option>
                      <option value="30,000 RS">30,000 RS</option>
                      <option value="25,000 RS">25,000 RS</option>
                      <option value="20,000 RS">20,000 RS</option>
                      <option value="15,000 RS">15,000 RS</option>
                      <option value="10,000 RS">10,000 RS</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="add" class="form-control" id="address" required>
                  </div>
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function validateForm() {
    let name = document.getElementById('name').value;
    let education = document.getElementById('education').value;
    let salary = document.getElementById('salary').value;
    let address = document.getElementById('address').value;

    if (name == "" || education == "" || salary == "" || address == "") {
      alert("All fields must be filled out");
      return false;
    }
    if (education == "" || education == "---------------------- Select Education ---------------------") {
      alert("Please select an education level");
      return false;
    }
    if (salary == "" || salary == "---------------------- Select Salary ---------------------") {
      alert("Please select a salary");
      return false;
    }
    return true;
  }
</script>
