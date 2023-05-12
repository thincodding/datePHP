<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "date";

    $conn = mysqli_connect($servername, $username, $password, $db);
    $query = "SELECT * FROM tbl_date ORDER BY id ASC ";
    $result = mysqli_query($conn, $query);
    // if($conn){
    //     echo "success full";
    // }else{
    //     echo "fail" . mysqli_connect_error($conn);
    // }
?>