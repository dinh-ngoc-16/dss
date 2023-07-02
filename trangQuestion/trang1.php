<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css" />
    <title>Document</title>
  </head>
  <body>
    <form action="">
      <input type="text">
      <button>Tìm kiếm</button>
    </form>
    <table>
      <tr>
        <th>Question ID</th>
        <th>Question</th>
        <th>User Name</th>
        <th>Tags</th>
        <th>Created Date</th>
        <th>Number of Answerers</th>
        <th>View Answerers</th>
      </tr>
      <?php include("./main.php") ?>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>
