<?php

    session_start();
    if(isset($_SESSION['admin'])){
        include './connect.php';
        if(isset($_POST['add_batch'])){
            $batch= $_POST['batch'];

            $add_fac = "INSERT INTO `faculty`(`fac_name`, `fac_dept`, `fac_mail`, `fac_passwd`, `fac_phnum`) VALUES ('$fac_name', '$fac_dept', '$fac_mail', '$fac_passwd', '$fac_phnum')";
            $add_fac = mysqli_query($conn, $add_fac);
            if($add_fac){
                echo "Faculty Added Succesfully";
            }else{
                echo "Failed To Add Faculty";
            }
        }

        if(isset($_POST['del_fac'])){
            $fac_id= $_POST['fac_id'];
            
            $del_fac = "DELETE from faculty where fac_id=$fac_id";
            $del_fac = mysqli_query($conn, $del_fac);
            if($del_fac){
                echo "Faculty Deleted Succesfully";
            }else{
                echo "Failed To Deleted Faculty";
            }
        }
    }
