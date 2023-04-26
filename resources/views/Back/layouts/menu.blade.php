<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{route('admin.dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa-solid fa-user-secret"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Panel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.ayarlar.index')}}">
                <i class="fa-solid fa-user-tie"></i>
                    <span>Profil</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Experience -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.experience.index')}}">
                <i class="fa-regular fa-map"></i>
                    <span>Tecrube</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Education -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.education.index')}}">
                <i class="fa-solid fa-graduation-cap"></i>
                    <span>Tehsil</span></a>
            </li>

            <hr class="sidebar-divider">
            <!-- Nav Item - Skills -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.skills.index')}}">
                <i class="fa-solid fa-code"></i>
                    <span>Bacariqlar</span></a>
            </li>

            <hr class="sidebar-divider">
            <!-- Nav Item - Project -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.project.index')}}">
                <i class="fa-solid fa-code"></i>
                    <span>Layiheler</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name }}</span>

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('admin.logout')}}" data-toggle="" data-target="">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cixis
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">