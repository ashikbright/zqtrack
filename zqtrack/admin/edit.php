<?php
require_once("head.php");
require_once("sidebar.php");
?>

<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Edit Class</h5>
              <div class="card">
                <div class="card-body">
                  <?php
$reqid = $_REQUEST["edit"];
$query = "SELECT * FROM class WHERE cid = '$reqid'";
$q = $obj->query($query);
$row = mysqli_fetch_assoc($q);
                  ?>
                  <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Class Name *</label>
                      <input type="text" name="uclassname" value="<?php echo $row["class_name"] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Class Section</label>
                      <input type="text" name="usection"  value="<?php echo $row["section_name"] ?>" class="form-control" id="exampleInputPassword1">
                    </div>
                    </div>
                    <div class="col-md-6">
                      <button type="submit" class="btn btn-primary" name="update">Save</button>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>


<?php
 if(isset($_POST["update"])){
    extract($_POST);
   $query = "UPDATE class SET class_name = '$uclassname', section_name = '$usection' WHERE cid = '$reqid'";
   if($obj->query($query) === TRUE){
   echo "<script>alert('Updated Successfully.');</script>";
   require_once("viewclass.php");
}
else{
echo "<script>alert('Not Update.');</script>";
}
 }

require_once("footer.php");
?> 