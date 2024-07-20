<?php
require_once("head.php");
require_once("sidebar.php");
?>

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Teacher</h5>
                <div class="card">
                    <div class="card-body">
                        <?php
                        $reqid = $_REQUEST["edit"];
                        $query = "SELECT * FROM teachers WHERE tid = '$reqid'";
                        $q = $obj->query($query);
                        $row = mysqli_fetch_assoc($q);
                        ?>
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="teacherName" class="form-label">Teacher Name *</label>
                                        <input type="text" name="uteachername" value="<?php echo $row["teacher_name"] ?>" class="form-control" id="teacherName">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="qualification" class="form-label">Qualification</label>
                                        <input type="text" name="uqualification" value="<?php echo $row["education"] ?>" class="form-control" id="qualification">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="uaddress" value="<?php echo $row["Address"] ?>" class="form-control" id="address">
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
                $query = "UPDATE teachers SET teacher_name = '$uteachername', education = '$uqualification', Address = '$uaddress' WHERE tid = '$reqid'";
                if($obj->query($query) === TRUE){
                    echo "<script>alert('Updated Successfully.');</script>";
                    require_once("teacher_list.php");
                } else {
                    echo "<script>alert('Not Update.');</script>";
                }
            }

            require_once("footer.php");
            ?>
