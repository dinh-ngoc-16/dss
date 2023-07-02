<?php
include("../connect.php");

// $iduser = $_GET('id');
// echo $iduser;

$sql = "SELECT * FROM `questions`";
// $result = mysqli_query($conn, $sql);

// $sql2 = "SELECT * FROM `booklist` WHERE Quatity <= 10";
// $result2 = mysqli_query($conn, $sql2);
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
                echo  '<tr>
                    <td>'.$row["QuestionID"].'</td>
                       <td>'.$row["Question"].'</td>
                       <td>'.$row["UserID"].'</td>
                       <td>'.$row["Tags"].'</td>
                       <td>'.$row["CreatedDate"].'</td>
                      <td>'.$row["NumberAnswerers"].'</td>
                      <td><a href="../trangAnswer/index.php?id='.$row["QuestionID"].'&iduser='.isset($_GET['id']).'">link text</a></td>
                      </tr>';
    }
  } else {
    echo "0 results";
  }


mysqli_close($conn);
?>