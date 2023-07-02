<?php
include("../connect.php");
$ID = $_GET['id'];
$sql = "SELECT * FROM `answers` where QuestionID = $ID";
// $result = mysqli_query($conn, $sql);

// $sql2 = "SELECT * FROM `booklist` WHERE Quatity <= 10";
// $result2 = mysqli_query($conn, $sql2);
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            echo  '<tr>
                <td>'.$row["AnswerID"].'</td>
                   <td>'.$row["Answer"].'</td>
                   <td>'.$row["UserID"].'</td>
                   <td>'.$row["CreatedDate"].'</td>
                  </tr>';
    }
  } else {
    echo "0 results";
  }


mysqli_close($conn);
?>