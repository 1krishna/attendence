<?php

    session_start();
    if(isset($_SESSION['admin'])){
        include './connect.php';
        if(isset($_POST['add_student'])){
            $name = $_POST['name'];
            $reg_no = $_POST['reg_no'];
            $year = $_POST['year'];
            $dept_id = $_POST['dept_id'];
            $section = $_POST['section'];
            $mail = $_POST['mail'];
            $phnum = $_POST['phnum'];

            $add_std = "INSERT INTO `student`(`student_reg`, `student_name`, `student_phnum`, `student_mail`, `student_branch`, `student_year`, `student_section`) VALUES ('$reg_no','$name','$phnum','$mail','$dept_id','$year','$section')";
            // echo $add_std;
            $add_std = mysqli_query($conn,$add_std);
            if($add_std){
                echo "Student Added.";
            }else{
                echo "Failed To Add Student";
            }

        }

        if(isset($_POST['del_student'])){
            $student_reg = $_POST['student_reg'];
            $del_std = "DELETE from student where student_reg = '$student_reg'";
            // echo $add_std;
            $del_std = mysqli_query($conn,$del_std);
            if($del_std){
                echo "Student Deleted.";
            }else{
                echo "Failed To Delete Student";
            }

        }
    }
?>