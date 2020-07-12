<?php
include './connectdb.php';
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM payment 
  WHERE Student_Id LIKE '%" . $search . "%';
 ";
} else {
    $query = "SELECT * FROM `payment` natural join admin  ORDER BY `payment`.`payment_date` DESC";
}
$results = mysqli_query($connect, $query);
if (mysqli_num_rows($results) > 0) {
    $output .= '
  <div class="table-responsive">
   <table class="table table-bordered ">
    <tr>
     <th>Student Id No</th>
     <th>Semester Number</th>
     <th>Amount</th>
     <th>Date</th>
    </tr>
 ';
    while ($row = mysqli_fetch_array($results)) {
        $output .= '
   <tr>
    <td>' . $row["student_Id"] . '</td>
    <td >' . $row["semester_no"] . '</td>
    <td>' . $row["amount"] . '</td>
  
    <td>' . $row["payment_date"] . '</td>

  </tr>
  ';
    }
    echo $output;
   
} else {
    echo 'Data Not Found';
}
?>