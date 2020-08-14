<!doctype html>
<html class="fixed">

<head>
    <?php
    include_once 'includes/head.php';
    ?>
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <?php include_once 'includes/header.php'; ?>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <?php include 'includes/nav-bar.php'; ?>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Profile Details</h2>
                </header>
                <!-- start: page -->
                <div class="row">
                    <div class="col">
                        <section class="card">
                            <header class="card-header">
                                <h2 class="card-title">Update Profile Details</h2>
                            </header>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-5">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" id="fac_name" value='<?php echo $fac['fac_name']; ?>'>
                                            <div id="name_err" style="color:red"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-5">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Mail<span class="required">*</span></label>
                                            <input type="text" class="form-control" id="fac_mail" value='<?php echo $fac['fac_mail']; ?>'>
                                            <div id="name_err" style="color:red"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-5">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Mobile<span class="required">*</span></label>
                                            <input type="text" class="form-control" id="fac_phnum" value='<?php echo $fac['fac_phnum']; ?>'>
                                            <div id="name_err" style="color:red"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-5">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Department<span class="required">*</span></label>

                                            <input type="text" class="form-control" id="" value='<?php echo $fac['dept_name']; ?>' disabled>
                                            <div id="name_err" style="color:red"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-5">
                                        <div class="col-lg">
                                            <input type="button" class="btn btn-primary" value="Update Details" style="width: 100%" onclick="upd_profile();">
                                            <div id="name_err" style="color:red"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- end: page -->
            </section>
        </div>
    </section>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="vendor/common/common.js"></script>
    <script src="vendor/nanoscroller/nanoscroller.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="vendor/jquery-ui/jquery-ui.js"></script>
    <script src="vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
    <script src="vendor/jquery-appear/jquery-appear.js"></script>
    <script src="vendor/flot/jquery.flot.js"></script>
    <script src="vendor/flot.tooltip/flot.tooltip.js"></script>
    <script src="vendor/flot/jquery.flot.pie.js"></script>
    <script src="vendor/flot/jquery.flot.categories.js"></script>
    <script src="vendor/flot/jquery.flot.resize.js"></script>
    <script src="vendor/jquery-sparkline/jquery-sparkline.js"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <!-- Examples -->
    <script src="js/examples/examples.dashboard.js"></script>

    <script>
        function upd_profile() {
            var fac_name = $('#fac_name').val();
            var fac_mail = $('#fac_mail').val();
            var fac_phnum = $('#fac_phnum').val();

            var data = {
                fac_name: fac_name,
                fac_mail: fac_mail,
                fac_phnum: fac_phnum,
                upd_fac: ''
            }

            getrequest('queries/faculty.php', data, 'update-profile.php');
        }
    </script>

</body>

</html>