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
    <link rel="stylesheet" href="vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
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
        <?php
        if (isset($_POST['c_passwd']) && isset($_POST['n_passwd']) && isset($_POST['r_passwd'])) {
            $query = "SELECT fac_passwd from faculty where fac_id=" . $_SESSION['fac_id'];
            $result = mysqli_query($conn, $query);
            $passwd = mysqli_fetch_assoc($result);
            // echo $passwd['fac_passwd'];
            $cp = $_POST['c_passwd'];
            $np = $_POST['n_passwd'];
            $rp = $_POST['r_passwd'];
            if ($cp == $passwd['fac_passwd']) {
                if ($np == $rp) {
                    $qu = "UPDATE faculty set fac_passwd='$np' where fac_id=" . $_SESSION['fac_id'];
                    // echo $qu;
                    $result = mysqli_query($conn, $qu);
                    if ($result) {
                        header('Location: change-passwd.php?pc');
                    }
                }
            }
        }
        ?>

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
                                <h2 class="card-title">Change Password</h2>
                            </header>
                            <div class="card-body">
                                <?php 
                                
                                    if(isset($_GET['pc'])){
                                        echo "<div style='color:green;text-align:center;font-size:20px;'>Password Changed</div><br>";
                                    }
                                ?>
                                <form action="change-passwd.php" method="POST" onsubmit='return validate();'>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <div class='row' style="text-align:right;">
                                                <div class="col-lg-4">
                                                    <label class="control-label text-lg-right pt-2" for="inputDefault">Current Password<span class="required">*</span></label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <input type="password" class="form-control" id="c_passwd" name="c_passwd">
                                                    <div id="pass_err" style="color:red"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <div class='row' style="text-align:right;">
                                                <div class="col-lg-4">
                                                    <label class="control-label text-lg-right pt-2" for="inputDefault">New Password<span class="required">*</span></label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <input type="password" class="form-control" id="n_passwd" name="n_passwd">
                                                    <div id="pass1_err" style="color:red"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <div class='row' style="text-align:right;">
                                                <div class="col-lg-4">
                                                    <label class="control-label text-lg-right pt-2" for="inputDefault">Re-enter New Password<span class="required">*</span></label>
                                                </div>
                                                <div class="col-lg-5">
                                                    <input type="password" class="form-control" id="r_passwd" name="r_passwd">
                                                    <div id="pass2_err" style="color:red"></div>
                                                </div>
                                                <div id="pass3_err" style="color:red"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <div class='row' style="text-align:right;">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-5">
                                                    <button class="btn btn-primary">Change Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <!-- Examples -->
    <script src="js/examples/examples.dashboard.js"></script>

    <script>
        function validate() {

            var c_passwd = $('#c_passwd').val();
            var n_passwd = $('#n_passwd').val();
            var r_passwd = $('#r_passwd').val();

            var ret = true;
            document.getElementById("pass_err").innerHTML = "";
            document.getElementById("pass1_err").innerHTML = "";
            document.getElementById("pass2_err").innerHTML = "";
            document.getElementById("pass3_err").innerHTML = "";

            if (c_passwd == "") {
                document.getElementById("pass_err").innerHTML = "Please Enter Old Password!";
                ret = false;
            }

            if (n_passwd == "") {
                document.getElementById("pass1_err").innerHTML = "Please Enter New Password!";
                ret = false;
            }

            if (r_passwd == "") {
                document.getElementById("pass2_err").innerHTML = "Please Re-Enter New Password!";
                ret = false;
            }

            if (r_passwd != n_passwd) {
                document.getElementById("pass3_err").innerHTML = "Passwords Not Matched!";
                ret = false;
            }


            if (ret == false) {
                return false;
            }
        }
    </script>

</body>

</html>