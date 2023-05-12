<?php 


   include './db_conn.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_date WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        // echo "Delete Success";

        header('location:index.php?msg=Youare deleted successfully!');

    }else{ 
        // echo "Fail" . mysqli_error($conn);
    }


?>