<?php

    session_start();
    if(isset($_SESSION['fac_id'])){
        include './connect.php';
        if(isset($_POST['add_course'])){
            $course_title= $_POST['course_title'];
            $course_code= $_POST['course_code'];
            $fac_id= $_SESSION['fac_id'];

            $add_course = "INSERT INTO `course`(`course_title`, `course_code`, `fac_id`) VALUES ('$course_title','$course_code','$fac_id')";
            $add_course = mysqli_query($conn, $add_course);
            if($add_course){
                echo "Course Added";
            }else{
                echo "Failed To Add Course";
            }
        }

        if(isset($_POST['del_course'])){
            $course_id= $_POST['course_id'];

            $add_course = "DELETE from course where course_id = $course_id";
            $add_course = mysqli_query($conn, $add_course);
            if($add_course){
                echo "Course Deleted";
            }else{
                echo "Failed To Delete Course";
            }
        }
    }
