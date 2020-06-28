<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Vuexy - Bootstrap HTML admin template</title>

    <?php $this->load->view('assets/css');?>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static" 
        data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- MENU -->
    <?php $this->load->view('header');?>
    <!-- ENDMENU -->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- MAIN CONTENT -->
                <?php 
                    $this->load->view("ui/$module");
                ?>
                <!-- END MAIN CONTENT -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">
                COPYRIGHT &copy; 2020
                <a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">
                    Pixinvent,
                </a>
                All rights Reserved
            </span>
            <span class="float-md-right d-none d-md-block">
                Hand-crafted & Made with
                <i class="feather icon-heart pink"></i>
            </span>
            <button class="btn btn-primary btn-icon scroll-top" type="button">
                <i class="feather icon-arrow-up"></i>
            </button>
        </p>
    </footer>
    <!-- END: Footer-->



    <?php $this->load->view('assets/js');?>

</body>
<!-- END: Body-->

</html>