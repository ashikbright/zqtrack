<?php
if(!isset($_POST["search"])){
?>
<div class="container-fluid mb-2">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body card-border">
              <div class="d-flex">
            <h5 class="card-title fw-semibold mb-4">Teacher Salary</h5>
            <input type="text" class="form-control ms-auto mb-3" style="width:30%;" name="search" id="search" placeholder="Search Here" value="">
            </div>
            <?php } ?>
            <table class="table table-hover text-center" id="table-data">
                <thead class="table-active">
                    <th>#</th>
                    <th>Teacher  Name</th>
                    <th>Class</th>
                    <th>Salary</th>
                </thead>
                <tbody class="table-striped">
                    <?php
                    if(isset($_POST["search"])){
                      include("../connect.php");
                      extract($_POST);
                      $query = "SELECT teachers.tid,teachers.teacher_name,teachers.salary,class_assign.class FROM teachers INNER JOIN class_assign ON teachers.teacher_name = class_assign.teacher_name WHERE class_assign.teacher_name LIKE '%$search%'";
                      $q = $obj->query($query);
                    }
                    else{
                    $query = "SELECT teachers.tid,teachers.teacher_name,teachers.salary,class_assign.class FROM teachers INNER JOIN class_assign ON teachers.teacher_name = class_assign.teacher_name";
                    $q = $obj->query($query);
                    }
                    while($row = mysqli_fetch_assoc($q)){
                    ?>
                    <tr>
                        <td><?php echo $row["tid"]; ?></td>
                        <td><?php echo $row["teacher_name"]; ?></td>
                        <td><?php echo $row["class"]; ?></td>
                        <td><?php echo $row["salary"]; ?></td>
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
    url: "teacher_salary.php",
    type: "POST",
    data: {search:liveSearch},
    success: function(data){
     $("#table-data").html(data);
    }
   });
  });
    });
  </script>