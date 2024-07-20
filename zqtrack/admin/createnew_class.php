<?php
if (isset($_POST["submit"])) {
    extract($_POST);

    if (empty($classname) || empty($section)) {
        echo "<script>alert('Please select both Class Name and Class Section.');</script>";
    } else {
        // Check if the class already exists
        $checkQuery = "SELECT * FROM class WHERE class_name='$classname' AND section_name='$section'";
        $checkResult = $obj->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            echo "<script>alert('Class already exists.');</script>";
        } else {
            $query = "INSERT INTO class VALUES('', '$classname', '$section')";

            if ($obj->query($query)) {
                echo "<script>alert('Created Successfully.');</script>";
            } else {
                echo "<script>alert('!Ooops Class Not Created.');</script>";
            }
        }
    }
}
?>

<?php
if (!isset($_POST["search"])) {
?>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Create Class</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Class Name *</label>
                                        <select name="classname" id="" class="form-control" required>
                                            <option selected disabled>---------------------- Create Class -----------------------</option>
                                            <option value="Class One">Class One</option>
                                            <option value="Class Two">Class Two</option>
                                            <option value="Class Three">Class Three</option>
                                            <option value="Class Four">Class Four</option>
                                            <option value="Class Five">Class Five</option>
                                            <option value="Class Six">Class Six</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Class Section</label>
                                        <select name="section" id="" class="form-control" required>
                                            <option selected disabled>---------------------- Create Section ---------------------</option>
                                            <option value="Section - A">Section - A</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--  Header End -->
            <div class="container-fluid mb-2">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body card-border">
                            <div class="d-flex">
                                <h5 class="card-title fw-semibold mb-4">Created Classes</h5>
                                <input type="text" class="form-control ms-auto mb-3" style="width:30%;" name="search" id="search" placeholder="Search Here" value="">
                            </div>
                            <?php } ?>

                            <table class="table table-hover text-center" id="table-data">
                                <thead class="table-active">
                                    <th>#</th>
                                    <th>Class Name</th>
                                    <th>Class Section</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody class="table-striped">
                                    <?php
                                    if (isset($_POST["search"])) {
                                        include("../connect.php");
                                        extract($_POST);
                                        $query = "SELECT * FROM class WHERE class_name LIKE '%$search%'";
                                        $q = $obj->query($query);
                                    } else {
                                        $query = "SELECT * FROM class";
                                        $q = $obj->query($query);
                                    }
                                    while ($row = mysqli_fetch_assoc($q)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row["cid"]; ?></td>
                                            <td><?php echo $row["class_name"]; ?></td>
                                            <td><?php echo $row["section_name"]; ?></td>
                                            <td><a href="edit.php?edit=<?php echo $row["cid"]; ?>"><i class="fas fa-edit fs-3 text-primary me-1"></i>Edit</a></td>
                                            <td><a href="delete.php?dlt=<?php echo $row["cid"]; ?>"><i class="fas fa-trash fs-3 text-primary me-1"></i>Delete</a></td>
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
    $(document).ready(function () {
        // *********************** Live Search *********************************** //
        $("#search").keyup(function () {
            var liveSearch = $(this).val();
            $.ajax({
                url: "createnew_class.php",
                type: "POST",
                data: { search: liveSearch },
                success: function (data) {
                    $("#table-data").html(data);
                }
            });
        });
    });
</script>
