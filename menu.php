
<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <!-- Logo -->

        <a href="#" class="logo">
            <!-- logo-->

            <div class="logo-mini">
                <span class="light-logo"><img src="images/logo.png" height="60" alt="logo" /></span>
            </div>
        </a>
    </div>

    <!-- Header Navbar -->

    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->

        <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                        <i data-feather="align-left"></i>
                    </a>
                </li>

                <li class="btn-group d-lg-inline-flex d-none">
                    <div class="app-menu">
                        <div class="search-bx mx-5"></div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">
                <li class="btn-group nav-item d-lg-inline-flex d-none">
                    <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
                        <i data-feather="maximize"></i>
                    </a>
                    <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Online <?=$user_sql_rows['name']?></a>
                </li>

                <!-- Control Sidebar Toggle Button -->

                <!-- User Account-->

                <li class="dropdown user user-menu">
                    <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow" data-bs-toggle="dropdown" title="User">
                        <img src="images/avatar/avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
                    </a>

                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="logout.php"><i class="ti-lock text-muted me-2"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar-->

    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->

                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="dashboard.php">
                            <i data-feather="monitor"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- <li class="treeview">
                        <a href="#">
                            <i data-feather="truck"></i>

                            <span>Orders</span>

                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>

                        <ul class="treeview-menu">
                            <li>
                                <a href="b2c.php">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>B2C
                                </a>
                            </li>

                            <li>
                                <a href="b2b.php">
                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>B2B
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <?php
                        if ($_SESSION['user_type'] == 'admin') {
                    ?>
                        <li><a class="dropdown-item" href="users.php"><i data-feather="users"></i> Users</a></li>
                        <li><a class="dropdown-item" href="inactive-users.php"><i data-feather="users"></i> Inactive Users</a></li>
                    <?php 
                        }else{
                        ?>
                        <li><a class="dropdown-item" href="user-profile.php"><i data-feather="users"></i> User Profile</a></li>
                    <?php     
                        }
                    ?>    
                    <li><a class="dropdown-item" href="logout.php"><i data-feather="power"></i> Logout</a></li>
                </ul>

                <div class="sidebar-widgets">
                    <div class="copyright text-center m-25 text-white-50">
                        <p>
                            <strong class="d-block">Admin Dashboard</strong> ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>
