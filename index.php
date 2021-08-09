<?php 

    $user   = "admin";
    $pass   = 12345;
    $email  = "admin@gmail.com";

    // if ($user == "admin") {
    //     if ($pass == 12345) {
    //         echo "Welcome Admin";
    //     }else{
    //         echo "Wrong Password";
    //     }
    // }else{
    //     echo "Access Denied!";
    // }

    // if ( $user == "admin" && $pass == 12345) {
    //     echo " Welcome Admin ";
    // }else{
    //     echo " Access Denied! ";
    // }

    // if ( ( $user == "admin" || $email == "admin@gmail.com ") && $pass == 12345) {
    //     echo " Welcome back, Admin ";
    // }else{
    //     echo " Something Went Wrong! ";
    // }

    if ($user == "admin" || $email == "admin@gmail.com") {
        if ($pass == 12345) {
            echo "Welcome Admin";
        }
    }else{
        echo "Access Denied";
    }

?>