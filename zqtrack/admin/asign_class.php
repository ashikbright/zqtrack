<?php
if(isset($_POST["submit"])){
  // Extract and validate POST data
  $name = isset($_POST['name']) ? trim($_POST['name']) : '';
  $class = isset($_POST['class']) ? trim($_POST['class']) : '';
  $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
  $section = isset($_POST['section']) ? trim($_POST['section']) : '';

  // Check if any of the fields are empty
  if(empty($name) || empty($class) || empty($subject) || empty($section)) {
    echo "<script>alert('All fields are required.');</script>";
  } else {
    $q = "INSERT INTO class_assign VALUES ('','$name','$class','$subject','$section')";

    if($obj->query($q) === TRUE)
    {
      echo "<script>alert('Successfully Class Assign.');</script>";
    }
    else
    {
      echo "<script>alert('Class Not Assign..');</script>";
    }
  }
}
?>

<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Teachers Class Assign</h5>
        <div class="card">
          <div class="card-body">
            <form method="POST">
              <div class="row">

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="teacherName" class="form-label">Teacher Name</label>
                    <select name="name" id="teacherName" class="form-control" required>
                      <option selected disabled>---------------------- Select Teachers ---------------------</option>
                      <?php
                        $query = "SELECT * FROM teachers";
                        $q = $obj->query($query);
                        while($row = mysqli_fetch_assoc($q)){
                      ?>
                      <option value="<?php echo $row['teacher_name']; ?>"><?php echo $row['teacher_name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="className" class="form-label">Class Name</label>
                    <select name="class" id="className" class="form-control" required>
                      <option selected disabled>---------------------- Select Class ---------------------</option>
                      <?php
                        $query = "SELECT * FROM class";
                        $q = $obj->query($query);
                        while($row = mysqli_fetch_assoc($q)){
                      ?>
                      <option value="<?php echo $row['class_name']; ?>"><?php echo $row['class_name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="subjectName" class="form-label">Choose Subject</label>
                    <select name="subject" id="subjectName" class="form-control" required>
                      <option selected disabled>---------------------- Choose Subject ---------------------</option>
                      <option value="FIQH">FIQH</option>
                      <option value="HIFL">HIFL</option>
                      <option value="TAJWEED">TAJWEED</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="sectionName" class="form-label">Class Section</label>
                    <select name="section" id="sectionName" class="form-control" required>
                      <option selected disabled>---------------------- Class Section ---------------------</option>
                      <option value="Section - A">Section - A</option>
                    </select>
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
