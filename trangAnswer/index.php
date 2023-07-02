<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="question">
    <h1>Question</h1>
            <?php
            include("../connect.php");
            $ID = $_GET['id'];
$sql = "SELECT * FROM `questions` where QuestionID = $ID";
// $result = mysqli_query($conn, $sql);

// $sql2 = "SELECT * FROM `booklist` WHERE Quatity <= 10";
// $result2 = mysqli_query($conn, $sql2);
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
            echo  '<p>'.$row['Question'].'</p>';
    }}
            ?>
    
    </div>
    <h1>Answer</h1>
    <table>
      <tr>
        <th>Answre ID</th>
        <th>Answre</th>
        <th>User Name</th>
        <th>Create Date</th>
      </tr>
      <?php include("./main.php") ?>
    </table>
    <div class="add" id="addfield">
      <form>

        <p >Answer: </p>
        <textarea name="answer" id="answer" cols="150" rows="10"></textarea>
        <p >Reference: </p>
        <input name="answer" id="answer" cols="150" rows="10"></input>
        <button class="btn">submit answer</button>

    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
const params = new URLSearchParams(window.location.search);
    if(params.has('iduser') && params.get('iduser')){
      document.getElementById("addfield").style.display = "block";
    }else{
      document.getElementById("addfield").style.display = "none";
    }
    </script>
  </body>
</html>
