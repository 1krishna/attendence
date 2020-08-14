<?php

session_start();
if (isset($_SESSION['fac_id'])) {
    include './connect.php';
    if (isset($_POST['add_attendence'])) {
        $date= $_POST['date'];
        $course= $_POST['course'];
        $reg_no= $_POST['reg_no'];
        $present= $_POST['present'];

        $add_attendence = "INSERT INTO `attendence`(`reg_no`, `course_id`, `date`, `present`) VALUES ('$reg_no','$course','$date','$present')";
        // echo $add_attendence;
        $add_attendence = mysqli_query($conn, $add_attendence);
        if ($add_attendence) {
            echo "Attendence Added";
        } else {
            echo "Failed To Add Attendence";
        }
    }

    if (isset($_POST['upd_attendence'])) {
        $date = $_POST['date'];
        $course = $_POST['course'];
        $reg_no = $_POST['reg_no'];
        $present = $_POST['present'];

        $add_attendence = "UPDATE `attendence` set present='$present' where reg_no='$reg_no' and course_id='$course' and date='$date'";
        // echo $add_attendence;
        $add_attendence = mysqli_query($conn, $add_attendence);
        if ($add_attendence) {
            echo "Attendence Added";
        } else {
            echo "Failed To Add Attendence";
        }
    }

}
