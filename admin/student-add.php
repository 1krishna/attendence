<!doctype html>
<html class="fixed">

<head>
    <?php
    include_once 'includes/head.php';
    ?>
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../vendor/animate/animate.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../vendor/font-awesome/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="../vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="../vendor/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="../vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="../vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="../vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="../css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Head Libs -->
    <script src="../vendor/modernizr/modernizr.js"></script>

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
                    <h2>Students</h2>
                </header>
                <!-- start: page -->
                <div class="row">
                    <div class="col">
                        <section class="card">
                            <header class="card-header">
                                <h2 class="card-title"><?php
                                                        if (isset($_POST['fac_id'])) {
                                                            echo 'Update';
                                                        } else {
                                                            echo "Add";
                                                        } ?> Student</h2>
                            </header>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Student Name<span class="required">*</span></label>

                                            <input type="text" class="form-control" id="name">
                                            <div id="name_err" style="color:red"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Student Registration Number<span class="required">*</span></label>

                                            <input type="text" class="form-control" id="reg_no">
                                            <div id="name_err" style="color:red"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Year<span class="required">*</span></label>
                                            <select name="dept" id="year" class="form-control">
                                                <option value="I">I Year</option>
                                                <option value="II">II Year</option>
                                                <option value="III">III Year</option>
                                                <option value="IV">IV Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Branch<span class="required">*</span></label>
                                            <select name="dept" id="dept_id" class="form-control">
                                                <?php
                                                $depts = "SELECT * from dept";
                                                $depts = mysqli_query($conn, $depts);
                                                while ($dept = mysqli_fetch_assoc($depts)) {
                                                ?>
                                                    <option value="<?php echo $dept['dept_id']; ?>"><?php echo $dept['dept_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Section<span class="required">*</span></label>
                                            <select name="dept" id="section" class="form-control">
                                                <option value="A">A Section</option>
                                                <option value="B">B Section</option>
                                                <option value="C">C Section</option>
                                                <option value="D">D Section</option>
                                                <option value="E">E Section</option>
                                                <option value="F">F Section</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Mail<span class="required">*</span></label>

                                            <input type="text" class="form-control" id="mail">
                                            <div id="name_err" style="color:red"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg">
                                            <label class="control-label pt-2" for="inputDefault">Mobile<span class="required">*</span></label>

                                            <input type="text" class="form-control" id="phnum">
                                            <div id="name_err" style="color:red"></div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="form-group row">
                                    <div class="col-lg" style="text-align:center">
                                        <button class="btn btn-primary" type='button' onclick="add_student();">Add Student</button>
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
    <script src="../vendor/jquery/jquery.js"></script>
    <script src="../vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="../vendor/popper/umd/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>
    <script src="../vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="../vendor/common/common.js"></script>
    <script src="../vendor/nanoscroller/nanoscroller.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="../vendor/jquery-placeholder/jquery-placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="../vendor/jquery-ui/jquery-ui.js"></script>
    <script src="../vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
    <script src="../vendor/jquery-appear/jquery-appear.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="../js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="../js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="../js/theme.init.js"></script>

    <!-- Examples -->
    <script src="../js/examples/examples.dashboard.js"></script>

    <script>
        function add_student() {
            var name = $('#name').val();
            var reg_no = $('#reg_no').val();
            var year = $('#year').val();
            var dept_id = $('#dept_id').val();
            var section = $('#section').val();
            var mail = $('#mail').val();
            var phnum = $('#phnum').val();
            var data = {
                name : name,
                reg_no : reg_no,
                year : year,
                dept_id : dept_id,
                section : section,
                mail : mail,
                phnum : phnum,
                add_student: ''
            }

            getrequest('queries/student.php', data, 'student-view.php');
        }
    </script>

</body>

</html>