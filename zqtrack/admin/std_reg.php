<?php
if(isset($_POST['submit'])){
  extract($_POST);

  date_default_timezone_set("Asia/Kolkata");
$date=date("Y-m-d h:i:sa");

$dir = "images/";
$file = $dir.basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],$file);

$query = "INSERT INTO student VALUES ('','$name','$pname','$gender','$class','$section','$std_group','$file','$date','$fee')";
$qry = "INSERT INTO std_fees VALUES ('','$name','$class','$fee')";
$q = "INSERT INTO parents VALUES ('','$name','$num','$land_num','$add','$cnic_num')";

if($obj->query($query) === TRUE){
  if($obj->query($qry) === TRUE){
    if($obj->query($q) === TRUE){
      echo "<script>alert('Student Registration is Successfull.');</script>";
    }
  }
}

else{
  echo "<script>alert('Student Registration is Not Successfull.');</script>";

}

}
?>
<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Admission Form</h5>
              <div class="card">
                <div class="card-body">
                  <form  method="post" enctype="multipart/form-data">
                   
                  <div class="row">
                  <div class="col-md-6 ">
  <h4 class="mb-4">Student Details</h4>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Student Name</label>
                      <input name="name" type="text" class="form-control" required>
                    </div>
                  
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Guardian Name</label>
                      <input name="pname" type="text" class="form-control" required>
                    </div>

                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Select Gender</label>
                      <select name="gender" id="cars" class="form-control" required>
                      <option disabled selected>------------------------Select Gender----------------------------</option>
                       
                          <option value="female">Female</option>
                      </select>
                    </div>
              
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Class Name</label>
                      <select name="class" id="" class="form-control" required>
                      <option selected disabled>---------------------- Select Class ---------------------</option>
                        <?php
                       $query = "select * from class";
                       $q = $obj->query($query);
                       while($row = mysqli_fetch_assoc($q)){
                        ?>
                        <option value="<?php echo $row["class_name"]; ?>"><?php echo $row["class_name"];?> </option>
                        <?php } ?>
                      </select>
                    </div>
                  
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Class Section</label>
                      <select name="section" id="cars" class="form-control" required>
                      <option disabled selected>------------------------Select Class Section----------------------------</option>
                        
                          <option value="Section-A">SECTION-A</option>
                        
                      </select>
                    </div>
                   
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Student Group</label>
                      <select name="std_group" id="cars" class="form-control" required>
                      <option disabled selected>------------------------Select student group----------------------------</option>
                          <option value="Hifz group">Hifz group</option>
                          <option value="Special group">Special group</option>
                      </select>
                    </div>
                 
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Student Fee</label>
                      <input type="text" class="form-control" name="fee" required>
                    </div>
                  
                    <div class="mb-3">
                        <input type="file" name="image" required> 
                       </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>

                 
<!------------------------------ parents form here ------------------------->
<div class="col-md-6 ">
  <h4 class="mb-4">Parent Details</h4>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Parent Name</label>
                      <input name="name" type="text" class="form-control"  required>
                    </div>
                  
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                      <input name="num" type="number" class="form-control" required>
                    </div>

                  
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Landline Number</label>
                      <input name="land_num" type="text" class="form-control" >
                    </div>
              
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Address</label>
                      <input name="add" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Adhar Number</label>
                      <input name="cnic_num" type="number" class="form-control" required>
                    </div>

                  </div>

                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


