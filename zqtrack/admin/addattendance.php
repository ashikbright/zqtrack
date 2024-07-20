<?php
date_default_timezone_set("Asia/Karachi"); // timezone set
$firstdayofmonth = date("1-m-Y"); //first day of month
$totalDaysInMonth = date("t",strtotime($firstdayofmonth)); //total day of month
?>
<div class="container mt-5">
  <h2 class="mt-3">Attendence Table</h2>

  <div class="d-flex">
  <h4 class="mt-3">Student Attendence Of Month : <font color="red"><u><?php echo strtoupper(date("F",strtotime($firstdayofmonth))) ?></u></font></h4>

  <form action="" method="post" class=" ms-auto d-flex">
  <select name="class" id="" class="form-control">
  <option selected disabled>---- Select Class ----</option>
  <?php
  $query = "SELECT * FROM class";
  $q = $obj->query($query);
  while($row = mysqli_fetch_assoc($q)){
  ?>
  <option value="<?php echo $row["class_name"]; ?>"><?php echo $row["class_name"]; ?></option>
  <?php } ?>
  </select>
  <button class="btn btn-success ms-2" type="submit" name="stdsubmit">Search</button>
</form>  

</div>
  
  <div class="row mt-4">
    <div class="col-md-12">
  <div class="table-responsive">
    <table class="table table-bordered">
     <form action="" method="post">
     <thead class="text-center">
      <th>Student Name</th>
      <th>P</th>
      <th>A</th>
      <th>L</th>
      <th>H</th>
     </thead>
     <?php
      if(isset($_POST["stdsubmit"])){ //class student data query
        extract($_POST);
      $std_fetch = $obj->query("SELECT * FROM student WHERE class = '$class'");  
      while($row = mysqli_fetch_assoc($std_fetch)){    // std fetch
     ?>
     <tr><td class="text-center"><?php echo $row["name"]; ?> <input type="hidden" name="class" value="<?php echo $row["class"]; ?>"></td>
     <td class="text-center"><input checked type="checkbox" name="present[]" id="" value="<?php echo $row["sid"]; ?>"></td>
     <td class="text-center"><input type="checkbox" name="absent[]" id="" value="<?php echo $row["sid"]; ?>"></td>
     <td class="text-center"><input type="checkbox" name="leave[]" id="" value="<?php echo $row["sid"]; ?>"></td>
    <td class="text-center"><input type="checkbox" name="holiday[]" id="" value="<?php echo $row["sid"]; ?>"></td>
    </tr>
     <?php } } ?>
     <tr><td class="text-center">Select Date (Optional)</td>
     <td colspan="4"><input type="date" name="selected_date" class="form-control" id=""></td>
    </tr>
    <tr><td colspan="5"><button type="submit" class="btn btn-success form-control" name="submit">Submit</button></td></tr>
    </form>
    </table>
  </div>
</div>
</div>
</div>
<!-- -----------------data insert -------------------- -->
<?php
if(isset($_POST["submit"])){
  extract($_POST);
  // date logic start
  if($_POST["selected_date"] == NULL){
    $selected_date = date("Y-m-d");
  }
  else{
    $selected_date = $selected_date;
  }
  // date logic end

  //month & year here
  $month = date("M",strtotime($selected_date));
  $year = date("Y",strtotime($selected_date));
  //month & year end

  // variable for data base entry here
  if(isset($_POST["present"])){
$present = $_POST["present"];
$attendence = "P";
foreach($present as $sid){
$query = "INSERT INTO full_s_attendance VALUES ('','$sid','$class','$selected_date','$month','$year','$attendence')";
$q = $obj->query($query);
}
  }

  if(isset($_POST["absent"])){
    $absent = $_POST["absent"];
    $attendence = "A";
foreach($absent as $sid){
$query = "INSERT INTO full_s_attendance VALUES ('','$sid','$class','$selected_date','$month','$year','$attendence')";
$q = $obj->query($query);
}
      }

      if(isset($_POST["leave"])){
        $leave = $_POST["leave"];
        $attendence = "L";
        foreach($leave as $sid){
        $query = "INSERT INTO full_s_attendance VALUES ('','$sid','$class','$selected_date','$month','$year','$attendence')";
        $q = $obj->query($query);
        }
          }

          if(isset($_POST["holiday"])){
            $holiday = $_POST["holiday"];
            $attendence = "H";
            foreach($holiday as $sid){
            $query = "INSERT INTO full_s_attendance VALUES ('','$sid','$class','$selected_date','$month','$year','$attendence')";
            $q = $obj->query($query);
            }
              }

              if($q === TRUE){
                echo "<script>alert('Attendence has been successfully inserted.');</script>";
              }
              else{
                echo "<script>alert('Attendence inserted has been unsuccessfull.');</script>";
              }
}
?>

