<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
        <div class="container">
      <div class="row">
        <form action="./main.php" method="POST">
          <h3 class="flex-direction: column">Đăng Nhập admin</h3>
          <div class="form-group">
            <label for="formGroupExampleInput">Tài Khoản</label>
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput"
              name="user"
              value=""
            />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Mật Khẩu</label>
            <input
              type="text"
              class="form-control"
              id="formGroupExampleInput2"
              name="pass"
              value =""
            />
          </div>
          <button type="submit" class="btn btn-success" name="submit">Đăng Nhập</button>
        </form>
    </div>
</body>
</html>