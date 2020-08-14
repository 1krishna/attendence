<?php

    session_start();
    if(isset($_SESSION['fac_id'])){
        include './connect.php';
        if(isset($_POST['upd_fac'])){
            $fac_name= $_POST['fac_name'];
            $fac_mail= $_POST['fac_mail'];
            $fac_phnum= $_POST['fac_phnum'];

            $upd_fac = "UPDATE faculty set fac_name = '$fac_name', fac_mail = '$fac_mail', fac_phnum = '$fac_phnum' where fac_id = {$_SESSION['fac_id']}";
            $upd_fac = mysqli_query($conn, $upd_fac);
            if($upd_fac){
                echo "Faculty Details Updated Succesfully";
            }else{
                echo "Failed To Update Faculty Details";
            }
        }
    }

?>