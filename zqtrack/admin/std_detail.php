<?php
if(!isset($_POST["search"])){
?>
<div class="container-fluid mb-2">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body card-border">
              <div class="d-flex">
            <h5 class="card-title fw-semibold mb-4">Student Details</h5>
  <input type="text" class="form-control ms-auto mb-3" style="width:30%;" name="search" id="search" placeholder="Search Here" value="">
</div>
<?php } ?>
            <table class="table table-hover text-center" id="table-data">
                <thead class="table-active">
                    <th>#</th>
                    <th>Student</th>
                    <th>Guardian</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Std_group</th>
                    <th>Image</th>
                    <th>Admit_date</th>
                    <th>Fees</th>
                </thead>
                <tbody class="table-striped">
                    <?php
                     if(isset($_POST["search"])){
                    include("../connect.php");
                      extract($_POST);
                      $query = "SELECT * FROM student WHERE name LIKE '%$search%'";
                      $q = $obj->query($query);
                      }
                      else{
                    $query = "SELECT * FROM student";
                    $q = $obj->query($query);
                      }
                    while($row = mysqli_fetch_assoc($q)){
                    ?>
                    <tr>
                        <td><?php echo $row["sid"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["gurdian_name"]; ?></td>
                        <td><?php echo $row["Gender"]; ?></td>
                        <td><?php echo $row["class"]; ?></td>
                        <td><?php echo $row["section"]; ?></td>
                        <td><?php echo $row["std_group"]; ?></td>
                        <td><img src="<?php echo $row["image"]; ?>" width="50px" height="50px" alt="" srcset=""></td>
                        <td><?php echo $row["admit_date"]; ?></td>
                        <td><?php echo $row["amount"]." RS"; ?></td>
                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- *********************** jquery script ********************************** -->
   <script>
    $(document).ready(function(){
  // *********************** Live Search *********************************** //
  $("#search").keyup(function(){
   var liveSearch = $(this).val();
   $.ajax({
    url: "std_detail.php",
    type: "POST",
    data: {search:liveSearch},
    success: function(data){
     $("#table-data").html(data);
    }
   });
  });
    });
  </script>