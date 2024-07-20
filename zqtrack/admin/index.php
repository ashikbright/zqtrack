<?php

error_reporting(0);
session_start();

if(isset($_SESSION["name"])){
require_once("head.php");
require_once("sidebar.php");
if($_REQUEST["page"]){
    $page=$_REQUEST["page"];
    require_once($page);
}
else{
    require_once("body.php");
}
require_once("footer.php");
}

else{
require_once("login.php");
}

?>