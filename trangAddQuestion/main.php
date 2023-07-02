<?php
    include('../connect.php');
    $email = $_POST['iduser'];
    echo($email)
    $sql = 'INSERT INTO `questions` (`Question`, `UserID`, `Tags`, `CreatedDate`, `NumberAnswerers`) VALUES ("'.$_POST['question'].'", "'.$_POST['tag'].'", "'.$_POST['moTa'].'", "'.$_POST['img'].'")';
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>