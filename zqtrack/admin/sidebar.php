<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <h2 class=" mx-auto my-auto"><?php echo $_SESSION["role"]; ?></h2>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
<hr>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span>
                  <i class="ti ti-layout-dashboard fs-5"></i>
                </span>
                <span class="hide-menu fs-4 ms-2">Dashboard</span>
            </li>

            <?php
          if($_SESSION["role"] == "Admin"){
            if($_SESSION["role"] !== "Teacher"){
            ?>
            <li class="sidebar" >
                            <ul id="class">
                                <li class="nav-small-cap" >
                                    <a href="#teachersDropdown1" data-bs-toggle="collapse" aria-expanded="false">
                                        <i class="fas fa-book-open fs-3"></i> <!-- Icon for Teachers -->
                                        <span class="hide-menu fs-3 ms-2" >Classes</span>
                                        <i class="fas fa-angle-down fs-3  ms-2"></i> <!-- Dropdown Icon -->
                                    </a>
                                    <!-- Create a dropdown submenu with items -->
                                    <ul class="collapse submenu" id="showclass" >
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=createnew_class.php"
                                                aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-user-plus"></i>
                                                </span>
                                                <span class="hide-menu">Create Class</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=asign_class.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-list"></i>
                                                </span>
                                                <span class="hide-menu">Class Assign</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=viewclass.php"
                                                aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-user"></i>
                                                </span>
                                                <span class="hide-menu">View Class</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                               
                            </ul>
</li>
<?php } } ?>
       
<?php if($_SESSION["role"] == "Teacher" || "Admin"){ ?>
            <li class="sidebar">
                            <ul id="class1">
                                <li class="nav-small-cap">
                                    <a href="#teachersDropdown" data-bs-toggle="collapse" aria-expanded="false">
                                        <i class="fas fa-users fs-3"></i> <!-- Icon for Teachers -->
                                        <span class="hide-menu fs-3 ms-2">Teachers</span>
                                        <i class="fas fa-angle-down fs-3  ms-2"></i> <!-- Dropdown Icon -->
                                    </a>
                                    <!-- Create a dropdown submenu with items -->
                                    <ul class="collapse submenu" id="showclass1">

                                    <?php
                                    if($_SESSION["role"] == "Admin"){
                                        if($_SESSION["role"] !== "Teacher"){
                                    ?>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=teacher_reg.php"
                                                aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-user-plus"></i>
                                                </span>
                                                <span class="hide-menu">New Registration</span>
                                            </a>
                                        </li>
                                        <?php } } ?>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=teacher_list.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-list"></i>
                                                </span>
                                                <span class="hide-menu">Teacher List</span>
                                            </a>
                                        </li>

                                          
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=teacher_class.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-user"></i>
                                                </span>
                                                <span class="hide-menu">Teacher Classes</span>
                                            </a>
                                        </li>

                                        <?php 
                                        if($_SESSION["role"] == "Admin"){
                                        if($_SESSION["role"] !== "Teacher"){
                                        ?>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=reg.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-user"></i>
                                                </span>
                                                <span class="hide-menu">Staff Reg</span>
                                            </a>
                                        </li>
                                        <?php } } ?>
                                    </ul>
                                </li>
                            </ul>
</li>
<?php } ?>

<?php if($_SESSION["role"] == "Teacher" || "Admin"){ ?>
<li class="sidebar">
                            <ul id="class2">
                                <li class="nav-small-cap">
                                    <a href="#studentsdropdown" data-bs-toggle="collapse" aria-expanded="false">
                                        <i class="fas fa-user-graduate fs-3"></i> <!-- Icon for Teachers -->
                                        <span class="hide-menu ms-2 fs-3">Students</span>
                                        <i class="fas fa-angle-down fs-3 ms-2"></i> <!-- Dropdown Icon -->
                                    </a>
                                    <!-- Create a dropdown submenu with items -->
                                    <ul class="collapse submenu" id="showclass2">

                                    <?php
                                    if($_SESSION["role"] == "Admin"){
                                        if($_SESSION["role"] !== "Teacher"){
                                    ?>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=std_reg.php"
                                                aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-user-plus"></i>
                                                </span>
                                                <span class="hide-menu">New Registration</span>
                                            </a>
                                        </li>
                                        <?php } } ?>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=std_list.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-list"></i>
                                                </span>
                                                <span class="hide-menu">Students List</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=std_detail.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-school"></i>
                                                </span>
                                                <span class="hide-menu">Students Details</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=parent_detail.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-school"></i>
                                                </span>
                                                <span class="hide-menu">Parents Details</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=addattendance.php"
                                                aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-school"></i>
                                                </span>
                                                <span class="hide-menu">New Attendance</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=attendance.php"
                                                aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-school"></i>
                                                </span>
                                                <span class="hide-menu">Attendance Sheet</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
</li>
<?php } ?>

<?php
          if($_SESSION["role"] == "Admin"){
            if($_SESSION["role"] !== "Teacher"){
            ?>
<li class="sidebar">
                            <ul id="class3">
                                <li class="nav-small-cap">
                                    <a href="#amountdropdown" data-bs-toggle="collapse" aria-expanded="false">
                                        <i class="ti ti-coin fs-5"></i> <!-- Icon for Teachers -->
                                        <span class="hide-menu ms-2 fs-3">Fees & Payments</span>
                                        <i class="fas fa-angle-down fs-3 ms-2"></i> <!-- Dropdown Icon -->
                                    </a>
                                    <!-- Create a dropdown submenu with items -->
                                    <ul class="collapse submenu" id="showclass3">
                                    <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=std_fee.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-coin"></i>
                                                </span>
                                                <span class="hide-menu">Students Fess</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="index.php?page=teacher_salary.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-coin"></i>
                                                </span>
                                                <span class="hide-menu">Teacher Salary</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
</li>
<?php } } ?>
          </ul>
          <br><br>

        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->

    
    <!--  Main wrapper -->
     <!--  Main wrapper -->
     <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav ">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=body.php">
                  Home<i class="ti ti-home ms-1"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=teacher_list.php">
                  Teachers<i class="ti ti-user ms-1"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=std_list.php">
                  Students<i class="ti ti-user ms-1"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=viewclass.php">
                  Classes<i class="ti ti-book ms-1"></i>
              </a>
            </li>
            <li class="nav-item ms-1">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>

          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="" class="btn btn-primary"><?php echo $_SESSION["name"]; ?></a>
              <a href="logout.php" class="btn btn-danger ms-2">Log out</a>
            </ul>
          </div>

        </nav>
      </header>
      <br><br>
      <!--  Header End -->  <!--  Header End -->
     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){

  $("#class").click(function(){
    $("#showclass").slideToggle("slow");
  });

  $("#class1").click(function(){
    $("#showclass1").slideToggle("slow");
  });

  $("#class2").click(function(){
    $("#showclass2").slideToggle("slow");
  });

  $("#class3").click(function(){
    $("#showclass3").slideToggle("slow");
  });

});
</script>