<?php

include './db_conn.php';

?>
<!DOCTYPE html>
<html>

<head>

    <title>PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .btn-close:focus{
            box-shadow: none;
        }

        .alert-info{
            width: 400px;
            height: 55px;
            margin-left: 66rem;
        }


    </style>

</head>


<body>

    <h1 align="center">Date For Employee</h1>
    <div class="content-form">
        <div class="insert">
            <input type="text" name="fromdate" id="from_date" placeholder="Search Date" />
        </div>
        <div class="insert">
            <input type="text" name="todate" id="to_date" placeholder="to date" />
        </div>
        <div class="insert">
            <button type="button" name="filter" id="btn_filter" style="background-color: blue; padding:8px 20px;
            border:none;color:white">Search</button>
        </div>

        <div class="insert">
            <button type="submit" name="submit" style="background-color: green; padding:10px 20px; border:none;">
                <a href="../insert/Addnew.php" style="text-decoration: none;color:white;">Add New</a>
            </button>
        </div>
        <div class="insert">
            <input type="text" id="myInput" placeholder="Search..." style="width: 500px; padding:10px 20px; margin:10px">
        </div>

    </div>


    <div class="container">
        <div class="row ">
            <div class="col-md-12">
            <?php
                if (isset($_GET['msg'])) {
                    $msg = $_GET['msg'];
                    echo '
                    <div class="alert alert-info alert-dismissible fade show h-20" role="alert">
                        ' . $msg . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
                    ';
                }
                ?>
            </div>
        </div>
    </div>





    <div class="table-wrapper" id="date_table">
        <table class="fl-table">
            <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="20%">EmployeeName</th>
                    <th width="20%">Price</th>
                    <th width="20%">Date</th>
                    <th width="5%">Action</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>

                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["employee"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>


                        <td>
                            <a href="./edite.php?id=<?php echo $row['id'] ?>"><i class='bx bx-edit'></i></a>
                            <a href="./delete.php?id=<?php echo $row['id'] ?>"><i class='bx bx-message-x'></i></a>
                        </td>


                    </tr>

                <?php

                }
                ?>
            <tbody>
        </table>
    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="script.js">

</script>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            })
        })
    })
</script>

</html>