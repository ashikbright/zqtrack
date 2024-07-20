<?php
if(!isset($_POST["search"])){
?>
<div class="container-fluid mb-2">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body card-border">
              <div class="d-flex">
            <h5 class="card-title fw-semibold mb-4">Parent Details</h5>
            <input type="text" class="form-control ms-auto mb-3" style="width:30%;" name="search" id="search" placeholder="Search Here" value="">
</div>
<?php } ?>
            <table class="table table-hover text-center" id="table-data">
                <thead class="table-active">
                    <th>#</th>
                    <th>Parent Name</th>
                    <th>Phone</th>
                    <th>Landline No</th>
                    <th>Address</th>
                    <th>Aadhar Number</th>
                </thead>
                <tbody class="table-striped">
                    <?php
                    if(isset($_POST["search"])){
                      include("../connect.php");
                    extract($_POST);
                    $query = "SELECT * FROM parents WHERE name LIKE '%$search%'";
                    $q = $obj->query($query);
                    }
                    else{
                    $query = "SELECT * FROM parents";
                    $q = $obj->query($query);
                    }
                    while($row = mysqli_fetch_assoc($q)){
                    ?>
                    <tr>
                        <td><?php echo $row["pid"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["home_phone"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["cnic"]; ?></td>
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
    url: "parent_detail.php",
    type: "POST",
    data: {search:liveSearch},
    success: function(data){
     $("#table-data").html(data);
    }
   });
  });
    });
  </script>