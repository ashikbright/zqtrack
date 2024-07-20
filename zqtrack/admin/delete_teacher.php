<?php
require_once("head.php");
require_once("sidebar.php");

$reqid = $_REQUEST["dlt"];
$query = "DELETE FROM teachers WHERE tid = '$reqid'";
if($obj->query($query) === TRUE){
    echo "<script>alert('Deleted Successfully.');</script>";
    require_once("teacher_list.php");
}
else{
    echo "<script>alert('Not Deleted.');</script>";
}

require_once("footer.php");
?>
