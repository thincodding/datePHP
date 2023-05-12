<?php

include './db_conn.php';
if (isset($_POST["from_date"], $_POST["to_date"])) {
     $connect = mysqli_connect("localhost", "root", "", "date");
     $output = '';
     $query = "SELECT * FROM tbl_date WHERE date BETWEEN '" . $_POST["from_date"] . "' AND '" . $_POST["to_date"] . "'";
     $result = mysqli_query($connect, $query);
     $output .= '  
      <table class="fl-table">
      <thead>
          <tr>
              <th width="5%">ID</th>
              <th width="20%">EmployeeName</th>
              <th width="20%">Price</th>
              <th width="20%">Date</th>
           

          </tr>
      </thead>
      <tbody>';

     if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
               $output .= '                
               <tr>

                    <td>'.$row["id"].'</td>
                    <td>'.$row["employee"].'</td>
                    <td>'.$row["price"] .'</td>
                    <td>'.$row["date"] .'</td>

              
                    

               </tr>';
          }
     } else {
          $output .= '
          
          <tr>

               <td colspan="5">Not Found!</td>

          </tr>';
     }
     $output .= '</table>';
     echo $output;
}
