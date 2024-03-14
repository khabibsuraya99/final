<?php
    session_start();
    require_once("koneksi.php");

    $q = "SELECT id FROM ms_user
    WHERE email = '".$_POST['ipEmail']."'
    AND password = '".$_POST['ipPw']."'";

    $query = mysqli_query($con,$q);

    $jmldata = mysqli_num_rows($query);
    if($jmldata>=1){
        $data = mysqli_fetch_assoc($query);
        $_SESSION['username'] = $data['nama'];
        header("location:dashboard.php");
    } else {
        header("location:login.php");
    }






?>