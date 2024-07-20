<!-- A grey horizontal navbar that becomes vertical on small screens -->


<nav class="navbar navbar-expand-sm mt-5 bg-white border border-white shadow">
  <div class="container-fluid mt-5">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <span class="nav-link fs-6"><?php echo $_SESSION["role"]."   Dashboard"; ?></span>
      </li>
    </ul>
    <ul class="navbar-nav mb-3 me-4">
      <li class="nav-item">
        <a class="nav-link fs-3 me-4" href=""><a href="../index.php" class="">Home</a> / Dashboard</a>
      </li>
    </ul>
  </div>

</nav>
<img src="images/making-necessary-notes.jpg" width="1035px" height="300px" class="ms-3 mt-1"  alt="" srcset="">

<div class="container-fluid mb-1">

        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-4">
        
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">CLASSES</h5>
                    <ul>
                    <li class="sidebar-item mb-1">
                                            <a class="sidebar-link" href="index.php?page=createnew_class.php"
                                                aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-user-plus"></i>
                                                </span>
                                                <span class="hide-menu">Create New Class</span>
                                            </a>
                                        </li>


                                        <li class="sidebar-item mb-1">
                                            <a class="sidebar-link" href="index.php?page=asign_class.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-list"></i>
                                                </span>
                                                <span class="hide-menu">Teacher Class Assign</span>
                                            </a>
                                        </li>
                                        <br>
                    </ul>
                    </div>
                  </div>
                </div>

            
              <div class="col-lg-4">
                <!-- Monthly Earnings -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">TEACHERS</h5>
                    <ul>
                    <li class="sidebar-item mb-1 fs-3">
                                            <a class="sidebar-link" href="index.php?page=teacher_reg.php"
                                                aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-user-plus"></i>
                                                </span>
                                                <span class="hide-menu">New Registration</span>
                                            </a>
                                        </li>

                                        
                                        <li class="sidebar-item mb-1 fs-3">
                                            <a class="sidebar-link" href="index.php?page=teacher_class.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-user"></i>
                                                </span>
                                                <span class="hide-menu">Teacher Classes</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item mb-1 fs-3">
                                            <a class="sidebar-link fs-3" href="index.php?page=teacher_list.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-list"></i>
                                                </span>
                                                <span class="hide-menu">Teacher List</span>
                                            </a>
                                        </li>
                    </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4">
        
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">FEES & PAYMENTS</h5>
                    <ul>
                    <li class="sidebar-item mb-1">
                                            <a class="sidebar-link" href="index.php?page=std_fee.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-coin"></i>
                                                </span>
                                                <span class="hide-menu">Students Fess</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-item mb-1">
                                            <a class="sidebar-link" href="index.php?page=teacher_salary.php" aria-expanded="false">
                                                <span>
                                                    <i class="ti ti-coin"></i>
                                                </span>
                                                <span class="hide-menu">Teacher Salary</span>
                                            </a>
                                        </li>
                                        <br>
                    </ul>
                    </div>
                  </div>
                </div>


            
                
              </div>
            </div>

          </div>
        </div>
        