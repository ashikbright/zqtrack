<?php
if (!isset($_POST["search"])) {
?>
<div class="container-fluid mb-2">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body card-border">
                <div class="d-flex">
                    <h5 class="card-title fw-semibold mb-4">Teacher List</h5>
                    <input type="text" class="form-control ms-auto mb-3" style="width:30%;" name="search" id="search" placeholder="Search Here" value="">
                </div>
<?php
}
?>
                <table class="table table-hover text-center" id="table-data">
                    <thead class="table-active">
                        <th>#</th>
                        <th>Teachers Name</th>
                        <th>Qualification</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </thead>
                    <tbody class="table-striped">
                        <?php
                        if (isset($_POST["search"])) {
                            include("../connect.php");
                            extract($_POST);
                            $query = "SELECT * FROM teachers WHERE teacher_name LIKE '%$search%'";
                            $q = $obj->query($query);
                        } else {
                            $query = "SELECT * FROM teachers";
                            $q = $obj->query($query);
                        }
                        while ($row = mysqli_fetch_assoc($q)) {
                        ?>
                        <tr>
                            <td><?php echo $row["tid"]; ?></td>
                            <td><?php echo $row["teacher_name"]; ?></td>
                            <td><?php echo $row["education"]; ?></td>
                            <td><?php echo $row["Address"]; ?></td>
                            <td>
                                <a href="edit_teacher.php?edit=<?php echo $row['tid']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="delete_teacher.php?dlt=<?php echo $row['tid']; ?>" onclick="return confirm('Are you sure you want to delete this teacher?');" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
<?php
if (!isset($_POST["search"])) {
?>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
<!-- *********************** jquery script ********************************** -->
<script>
$(document).ready(function(){
    // *********************** Live Search *********************************** //
    $("#search").keyup(function(){
        var liveSearch = $(this).val();
        $.ajax({
            url: "teacher_list.php",
            type: "POST",
            data: {search:liveSearch},
            success: function(data){
                $("#table-data").html(data);
            }
        });
    });
});
</script>
