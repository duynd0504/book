<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<title>Thêm User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align="center">Add User</h2>
  <form action="UserController/insertUser" method="post" enctype="multidata/form-data">
    <div class="form-group">
      <label>FullName:</label>
      <input type="text" class="form-control" name="full" placeholder="Nhập tên đầy đủ" required="true" >
    </div>
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" name="user" placeholder="Nhập tên đăng nhập" required="true">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="Password" class="form-control" name="pass" placeholder="Nhập mật khẩu" required="true">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Nhập email" required="true">
    </div>
  <button type="submit" class="btn btn-primary" >THÊM VÀO CSDL</button>
  </form>
</div>
</body>
</html>