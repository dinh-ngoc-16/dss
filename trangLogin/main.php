<?php 
    include("../connect.php");
    session_start();
    if(isset($_POST['user']) or isset($_POST['pass'])){

        $_SESSION["user"] = $_POST['user'];
        $_SESSION["pass"] = $_POST['pass'];

    $sql = "SELECT * FROM `users` WHERE UserName  = '".$_POST['user']."' AND Password = '".$_POST['pass']."'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
                echo '<script>
                localStorage.setItem("iduser", "'.$row['UserID'].'");
                localStorage.setItem("role", "'.$row['Role'].'");
                window.location = "../trangQuestion/index.php?user='.$_POST['user'].'&id='.$row['UserID'].'";
                </script>';
    }
      }
        else {
            echo '<script>
                    alert("Sai Thông Tin");
                    window.location = "./index.php"
                </script>';
          }
      }
    
    mysqli_close($conn);
?>