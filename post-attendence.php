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


    <!-- DATA TABLES -->
    <link rel="stylesheet" href="vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />

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
                    <h2>Attendence</h2>
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
                                                            echo "Post";
                                                        } ?> Attendence</h2>
                            </header>
                            <div class="card-body">
                                <form action="post-attendence.php" method="post">
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <div class="col-lg">
                                                <label class="control-label pt-2" for="inputDefault">Course<span class="required">*</span></label>
                                                <select name="course" id="course" class="form-control populate" data-plugin-selectTwo>
                                                    <?php
                                                    $courses = "SELECT * from course where fac_id = {$_SESSION['fac_id']}";
                                                    $courses = mysqli_query($conn, $courses);
                                                    while ($course = mysqli_fetch_assoc($courses)) {
                                                    ?>
                                                        <option value="<?php echo $course['course_id']; ?>" <?php if (isset($_POST['attendence'])) {
                                                                                                                if ($_POST['course'] == $course['course_id']) {
                                                                                                                    echo 'selected';
                                                                                                                }
                                                                                                            } ?>><?php echo $course['course_title'] . " ({$course['course_code']})"; ?></option>
                                                    <?php }  ?>
                                                </select>
                                                <div id="name_err" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="col-lg">
                                                <label class="control-label pt-2" for="inputDefault">Branch<span class="required">*</span></label>
                                                <select name="dept_id" id="dept_id" class="form-control populate" data-plugin-selectTwo>
                                                    <?php
                                                    $depts = "SELECT * from dept";
                                                    $depts = mysqli_query($conn, $depts);
                                                    while ($dept = mysqli_fetch_assoc($depts)) {
                                                    ?>
                                                        <option value="<?php echo $dept['dept_id']; ?>" <?php if (isset($_POST['attendence'])) {
                                                                                                            if ($_POST['dept_id'] == $dept['dept_id']) {
                                                                                                                echo 'selected';
                                                                                                            }
                                                                                                        } ?>><?php echo $dept['dept_name']; ?></option>
                                                    <?php }  ?>
                                                </select>
                                                <div id="name_err" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="col-lg">
                                                <label class="control-label pt-2" for="inputDefault">Year<span class="required">*</span></label>
                                                <select name="year" id="year" class="form-control populate" data-plugin-selectTwo>
                                                    <option value="I" <?php if (isset($_POST['attendence'])) {
                                                                            if ($_POST['year'] == 'I') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>I Year</option>
                                                    <option value="II" <?php if (isset($_POST['attendence'])) {
                                                                            if ($_POST['year'] == 'II') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>II Year</option>
                                                    <option value="III" <?php if (isset($_POST['attendence'])) {
                                                                            if ($_POST['year'] == 'III') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>III Year</option>
                                                    <option value="IV" <?php if (isset($_POST['attendence'])) {
                                                                            if ($_POST['year'] == 'IV') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>IV Year</option>
                                                </select>
                                                <div id="name_err" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="col-lg">
                                                <label class="control-label pt-2" for="inputDefault">Section<span class="required">*</span></label>
                                                <select name="section" id="section" class="form-control populate" data-plugin-selectTwo>
                                                    <option value="A" <?php if (isset($_POST['attendence'])) {
                                                                            if ($_POST['section'] == 'A') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>A Section</option>
                                                    <option value="B" <?php if (isset($_POST['attendence'])) {
                                                                            if ($_POST['section'] == 'B') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>B Section</option>
                                                    <option value="C" <?php if (isset($_POST['attendence'])) {
                                                                            if ($_POST['section'] == 'C') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>C Section</option>
                                                    <option value="D" <?php if (isset($_POST['attendence'])) {
                                                                            if ($_POST['section'] == 'D') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>D Section</option>
                                                    <option value="E" <?php if (isset($_POST['attendence'])) {
                                                                            if ($_POST['section'] == 'E') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>E Section</option>
                                                    <option value="F" <?php if (isset($_POST['attendence'])) {
                                                                            if ($_POST['section'] == 'F') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>F Section</option>
                                                </select>
                                                <div id="name_err" style="color:red"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="col-lg">
                                                <label class="control-label pt-2" for="inputDefault">Date<span class="required">*</span></label>
                                                <input type="date" name="date" id="date" class="form-control" value="<?php if (isset($_POST['attendence'])) {
                                                                                                                            echo $_POST['date'];
                                                                                                                        } ?>" required>
                                                <div id="name_err" style="color:red"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-lg" style="text-align: right;">
                                            <button class="btn btn-primary" onclick="add_course();" name="attendence">Add Attendence</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
                <?php

                if (isset($_POST['attendence'])) {
                    $students = "SELECT * from student s, dept d where s.student_branch=d.dept_id and student_branch={$_POST['dept_id']} and student_year='{$_POST['year']}' and student_section = '{$_POST['section']}'";

                    $students = mysqli_query($conn, $students);
                ?>
                    <div class="row">
                        <div class="col">
                            <section class="card">
                                <header class="card-header">
                                    <h2 class="card-title">Students List</h2>
                                </header>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                                            <thead>
                                                <tr>
                                                    <th>Reg.no</th>
                                                    <th>Name</th>
                                                    <th>Mobile</th>
                                                    <th>Mail</th>
                                                    <th>Branch</th>
                                                    <th>Year</th>
                                                    <th>Section</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($student = mysqli_fetch_assoc($students)) {
                                                ?>
                                                    <tr id="<?php echo $student['student_reg']; ?>">
                                                        <td><?php echo $student['student_reg']; ?></td>
                                                        <td><?php echo $student['student_name']; ?></td>
                                                        <td><?php echo $student['student_phnum']; ?></td>
                                                        <td><?php echo $student['student_mail']; ?></td>
                                                        <td><?php echo $student['dept_name']; ?></td>
                                                        <td><?php echo $student['student_year']; ?></td>
                                                        <td><?php echo $student['student_section']; ?></td>
                                                        <td id="<?php echo $student['student_reg'] . 'm'; ?>">

                                                            <?php
                                                            $attend_check = "SELECT * from attendence where reg_no='{$student['student_reg']}' and course_id='{$_POST['course']}' and date='{$_POST['date']}'";
                                                            $attend_check = mysqli_query($conn, $attend_check);
                                                            $rows = mysqli_num_rows($attend_check);
                                                            if ($rows == 0) {
                                                            ?>
                                                                <div id="<?php echo $student['student_reg'] . 'f'; ?>">
                                                                    <span>
                                                                        <i class="btn fas fa-check" aria-hidden="true" onclick="attendence('<?php echo $student['student_reg']; ?>','P');"></i>
                                                                    </span>
                                                                    <span>
                                                                        <i class="btn fas fa-times" aria-hidden="true" onclick="attendence('<?php echo $student['student_reg']; ?>','A');"></i>
                                                                    </span>
                                                                </div>
                                                            <?php } else {
                                                                $attend = mysqli_fetch_assoc($attend_check);
                                                            ?>
                                                                <div id="<?php echo $student['student_reg'] . 'f'; ?>">
                                                                    <?php
                                                                    if ($attend['present'] == 'A') {
                                                                    ?>
                                                                        <span>
                                                                            <i class="btn fas fa-check" aria-hidden="true" onclick="upd_attend('<?php echo $student['student_reg']; ?>','P');"></i>
                                                                        </span>
                                                                    <?php } else{ ?>
                                                                        <span>
                                                                            <i class="btn fas fa-times" aria-hidden="true" onclick="upd_attend('<?php echo $student['student_reg']; ?>','A');"></i>
                                                                        </span>
                                                                    <?php } ?>
                                                                </div>
                                                            <?php } ?>
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
                <?php } ?>
            </section>
        </div>
        <!-- end: page -->
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
    <script src="vendor/select2/js/select2.js"></script>

    <!-- Specific Page Vendor -->
    <script src="vendor/jquery-ui/jquery-ui.js"></script>
    <script src="vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
    <script src="vendor/jquery-appear/jquery-appear.js"></script>
    <script src="vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="vendor/flot/jquery.flot.js"></script>
    <script src="vendor/flot.tooltip/flot.tooltip.js"></script>
    <script src="vendor/flot/jquery.flot.pie.js"></script>
    <script src="vendor/flot/jquery.flot.categories.js"></script>
    <script src="vendor/flot/jquery.flot.resize.js"></script>
    <script src="vendor/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="vendor/raphael/raphael.js"></script>
    <script src="vendor/morris/morris.js"></script>
    <script src="vendor/gauge/gauge.js"></script>
    <script src="vendor/snap.svg/snap.svg.js"></script>
    <script src="vendor/liquid-meter/liquid.meter.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <!-- Examples -->
    <script src="js/examples/examples.dashboard.js"></script>
    <script src="js/examples/examples.advanced.form.js"></script>


    <script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
    <script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
    <!-- Examples -->
    <script src="js/examples/examples.datatables.default.js"></script>
    <script src="js/examples/examples.datatables.row.with.details.js"></script>
    <script src="js/examples/examples.datatables.tabletools.js"></script>

    <script>
        function attendence(reg_no, present) {
            var date = $('#date').val();
            var course = $('#course').val();
            var data = {
                date: date,
                course: course,
                reg_no: reg_no,
                present: present,
                add_attendence: ''
            };
            getrequest('queries/attendence.php', data, '', 1, 1);
            $('#' + reg_no + 'f').hide();
            if (present == 'P') {
                $('#' + reg_no + 'm').html("<div style='color:green'>Present</div>");
            } else {
                $('#' + reg_no + 'm').html("<div style='color:red'>Absent</div>");
            }
        }

        function upd_attend(reg_no, present) {
            var date = $('#date').val();
            var course = $('#course').val();
            var data = {
                date: date,
                course: course,
                reg_no: reg_no,
                present: present,
                upd_attendence: ''
            };
            getrequest('queries/attendence.php', data, '', 1, 1);
            $('#' + reg_no + 'f').hide();
            if (present == 'P') {
                $('#' + reg_no + 'm').html("<div style='color:green'>Present</div>");
            } else {
                $('#' + reg_no + 'm').html("<div style='color:red'>Absent</div>");
            }
        }
    </script>
</body>

</html>