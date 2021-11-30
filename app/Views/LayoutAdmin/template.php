<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>E - Presensi</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/admin/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>/admin/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>/admin/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/admins">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="<?= base_url(); ?>/admin/plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?= base_url(); ?>/admin/plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="<?= base_url(); ?>/admin/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium"><?= session()->get('name'); ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>


        <?= $this->include('LayoutAdmin/navbar'); ?>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?= $alamat; ?></h4>
                    </div>

                    <?= $this->renderSection('konten'); ?>

                    <!-- ============================================================== -->
                    <!-- End Container fluid  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    <footer class="footer text-center"> 2021 © SKD Kelompok 7 Recaptcha dan Digital Signature
                    </footer>
                    <!-- ============================================================== -->
                    <!-- End footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Page wrapper  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Wrapper -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- All Jquery -->
            <!-- ============================================================== -->
            <script src="<?= base_url(); ?>/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?= base_url(); ?>/admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="<?= base_url(); ?>/admin/js/app-style-switcher.js"></script>
            <script src="<?= base_url(); ?>/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
            <!--Wave Effects -->
            <script src="<?= base_url(); ?>/admin/js/waves.js"></script>
            <!--Menu sidebar -->
            <script src="<?= base_url(); ?>/admin/js/sidebarmenu.js"></script>
            <!--Custom JavaScript -->
            <script src="<?= base_url(); ?>/admin/js/custom.js"></script>
            <!--This page JavaScript -->
            <!--chartis chart-->
            <script src="<?= base_url(); ?>/admin/plugins/bower_components/chartist/dist/chartist.min.js"></script>
            <script src="<?= base_url(); ?>/admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
            <script src="<?= base_url(); ?>/admin/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>