<?php



$conn = mysqli_connect("localhost", "root", "", "date");

if(isset($_POST['submit'])){
    $empname = $_POST['empname'];
    $price = $_POST['price'];
    $date = $_POST['date'];


    $errors = array();

    $u = "SELECT employee	FROM tbl_date WHERE employee = '$empname'";
    $uu = mysqli_query($conn, $u);

    $e = "SELECT price FROM tbl_date WHERE price = '$price'";
    $ee = mysqli_query($conn, $e);



    if(empty($empname)){
        $errors['u'] = "Employee Name Require";
    }else if(mysqli_num_rows($uu) > 0){
        $errors['uuu'] = "Employee already exists";
    }


    if(empty($price)){
        $errors['e'] = "Price Require";
    }else if(mysqli_num_rows($ee) > 0){
        $errors['eee'] = "Price already Exists";
    }

    if(empty($date)){
        $errors['d'] = "Date Require";
    }


    if(count($errors) == 0){

        $query = "INSERT INTO tbl_date(employee,price,date) VALUE ('$empname', '$price', '$date')";
        $result = mysqli_query($conn, $query);

        if($result){

            
            // echo "successFully";
            
            header('location:../tbl_emp/index.php?msg= Add Successfully!');


        }else{

            echo "failed";
        }

    }


}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New</title>
    <link rel="styleSheet" href="Addnew.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>


    <form class="form" method="post">
        <div class="title">EmployeeName</div>
        <div class="subtitle">Let's insert your employee!</div>
    
        <div class="list">
        <a href="../tbl_emp/index.php"><i class='bx bx-list-ul'></i></a>
        </div>
        <div class="input-container ic1">
            <input class="input" type="text" placeholder="EmployeeName" maxlength="50" name="empname"  />
        

            <p class="r"><?php if(isset($errors['u'])) echo $errors['u'];?></p>
            <p class="e"><?php if(isset($errors['uuu'])) echo $errors['uuu'];?></p>

        </div>

        <div class="input-container ic2">
            <input  class="input" type="number" placeholder="Price" maxlength="10" name="price"/>
           
            <p class="r"><?php if(isset($errors['e'])) echo $errors['e'];?></p>
            <p class="e"><?php if(isset($errors['eee'])) echo $errors['eee'];?></p>


        </div>


        <div class="input-container ic2">
            <input class="input" type="date" name="date"/>
            <p class="r"><?php if(isset($errors['d'])) echo $errors['d'];?></p>
    
        </div>

        <button type="submit" class="submit" name="submit">submit</button>
    </form>


</body>

</html>