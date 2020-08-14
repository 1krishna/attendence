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

    <!-- DATA TABLES -->
    <link rel="stylesheet" href="vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />


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
                                                            echo "View";
                                                        } ?> Students</h2>
                            </header>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                                        <thead>
                                            <tr>
                                                <th>Student Reg.no</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Mail</th>
                                                <th>Year</th>
                                                <th>Branch</th>
                                                <th>Section</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $students = "SELECT * from student s,dept d where s.student_branch=d.dept_id";
                                            $students = mysqli_query($conn, $students);
                                            while ($student = mysqli_fetch_assoc($students)) {
                                            ?>
                                                <tr id="<?php echo $student['student_reg']; ?>">
                                                    <td><?php echo $student['student_reg'] ?></td>
                                                    <td><?php echo $student['student_name'] ?></td>
                                                    <td><?php echo $student['student_phnum'] ?></td>
                                                    <td><?php echo $student['student_mail'] ?></td>
                                                    <td><?php echo $student['student_year'] ?></td>
                                                    <td><?php echo $student['dept_name'] ?></td>
                                                    <td><?php echo $student['student_section'] ?></td>
                                                    <td>
                                                        <form action="student-add.php" method="post">
                                                            <input type="hidden" name="student_reg" value="<?php echo $student['student_reg']; ?>">
                                                            <button type="submit" class="btn">
                                                                <i class="fas fa-pencil-alt" aria-hidden="true" type=submit></i>
                                                            </button>
                                                            <i class="btn fas fa-trash" aria-hidden="true" onclick="del('<?php echo $student['student_reg']; ?>');"></i>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
    <script src="../vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="../vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot.tooltip/flot.tooltip.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.categories.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="../vendor/raphael/raphael.js"></script>
    <script src="../vendor/morris/morris.js"></script>
    <script src="../vendor/gauge/gauge.js"></script>
    <script src="../vendor/snap.svg/snap.svg.js"></script>
    <script src="../vendor/liquid-meter/liquid.meter.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="../js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="../js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="../js/theme.init.js"></script>

    <!-- Examples -->
    <script src="../js/examples/examples.dashboard.js"></script>

    <script src="../vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="../vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="../vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
    <script src="../vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
    <script src="../vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
    <script src="../vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
    <script src="../vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
    <!-- Examples -->
    <script src="../js/examples/examples.datatables.default.js"></script>
    <script src="../js/examples/examples.datatables.row.with.details.js"></script>
    <script src="../js/examples/examples.datatables.tabletools.js"></script>

    <script>
        function del(id) {
            var data = {
                student_reg : id,
                del_student: '',
            };

            if (confirm("CONFIRM TO DELETE")) {
                getrequest('queries/student.php', data, 'student-view.php', 1);
                $('#' + id).hide();
            }
        }
    </script>

</body>

</html>